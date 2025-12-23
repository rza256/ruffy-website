<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enums\AssetType;
use App\Enums\ChatStyle;
use App\Models\Asset;
use App\Models\AssetVersion;
use Illuminate\Validation\Rule;

class Develop extends Controller
{
    public function home(Request $request)
    {
        return view('develop.home');
    }

    public function createView(Request $request, string $type)
    {
        $user = $request->user();
        $assetType = AssetType::fromString($type);

        if (!$assetType)
            return abort(400);

        // check permission, do they have permission to make the asset?
        if (!$user->canCreateAssetType($assetType))
            return abort(403);
        
        return view('develop.create', [
            'assetType' => $assetType
        ]);
    }

    public function create(Request $request, string $type)
    {
        $user = $request->user();
        $assetType = AssetType::fromString($type);

        if (!$assetType)
            return abort(400);

        if (!$user->canCreateAssetType($assetType))
            return abort(403);

        $rules = [
            'title' => ['required', 'string', 'min:1', 'max:24'],
            'description' => ['nullable', 'string', 'max:500'],
            'file' => ['required'],
        ];

        $typeRules = match ($assetType) {
            AssetType::Place => [
                'maxplayers' => ['required', 'integer', 'min:1', 'max:100'],
                'chatstyle' => [
                    'required',
                    Rule::enum(ChatStyle::class),
                ],
            ],
            
            default => [],
        };
        
        $data = $request->validate($rules + $typeRules);

        if ($assetType == AssetType::Place)
        {
            $file = $request->file('file');
            
            try {
                $path = CdnController::saveWithType($user, $file, $assetType);
            } catch (\Throwable $e) {
                // report($e);

                /* 
                return back()->withErrors([
                    'file' => 'There was an issue uploading your place.',
                ]);
                */

                dd($e);
            }

            $place = Asset::create([
                'name' => $data['title'],
                'description' => $data['description'],
                'type' => AssetType::Place,
                'creator_id' => $user->id,
                'is_for_sale' => false,
                'price' => -1,
                'chat_style' => ChatStyle::from((int)$data['chatstyle']),
                'server_size' => $data['maxplayers']
            ]);

            $version = AssetVersion::create([
                'asset_id' => $place->id,
                'cdn_thumbnail' => '', // nothing for now
                'cdn_file' => $path,
                'version' => 1,
            ]);
        }

        return redirect(route('ruffy.develop.home'))->withSuccess('Successfully created your asset');
    }
}

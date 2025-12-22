<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enums\AssetType;
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
                    Rule::enum(AssetType::class),
                ],
            ],
            
            default => [],
        };
        
        $data = $request->validate($rules + $typeRules);

        if ($assetType == AssetType::Place)
        {
            
            
            // handle file, run thumbnail job etc.
        }
    }
}

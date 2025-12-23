<?php

namespace App\Http\Controllers;

use App\Enums\AssetType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use App\Models\User;

class CdnController extends Controller
{
    public static function saveWithType(
        User $user,
        UploadedFile $file,
        AssetType $type
    ): string {
        $extension = $file->getClientOriginalExtension();

        $filename = sprintf(
            '%d_%s_%s.%s',
            $user->id,
            $type->id(),
            Str::random(10),
            $extension
        );

        return $file->storeAs(
            '',
            $filename,
            'places'
        );
    }
}

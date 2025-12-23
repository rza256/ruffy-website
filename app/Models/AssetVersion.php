<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssetVersion extends Model
{
    protected $fillable = [
        'asset_id',
        'version',
        'cdn_thumbnail',
        'cdn_file'
    ];
}

<?php

namespace App\Models;

use App\Enums\ChatStyle;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'type',
        'version_id',
        'creator_id',
        'comments_enabled',
        'is_public_domain',
        'is_for_sale',
        'price',
        'gear_attributes',
        'server_size',
        'chat_style'
    ];

    protected $casts = [
        'chat_style' => ChatStyle::class,
    ];
    
    /**
     * Gets the current version of this asset.
     */
    public function current()
    {
        return $this->belongsTo(AssetVersion::class, 'version_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

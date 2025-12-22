<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\AssetType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'username',
        'password',
        'blurb',
        'thumbnail_path',
        '3d_path'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function canCreateAssetType(AssetType $type) : bool
    {
        // dummy for now,
        // would preferably have bitwise permissions.

        return match($type) {
            AssetType::Animation => true,
            AssetType::Audio => true,
            AssetType::TShirt => true,
            AssetType::Shirt => true,
            AssetType::Pants => true,
            AssetType::Decal => true,
            AssetType::Mesh => true,
            AssetType::Model => true,
            AssetType::Place => true,
            AssetType::Plugin => true,
            default => false,
        };
    }
}

<?php

namespace App\Enums;

// https://pbs.twimg.com/media/FIECM2bWYAMOPnl?format=png&name=large

enum AssetType : int
{
    case Image = 1;
    case TShirt = 2;
    case Audio = 3;
    case Mesh = 4;
    case Lua = 5;
    case HTML = 6;
    case Text = 7;
    case Hat = 8;
    case Place = 9;
    case Model = 10;
    case Shirt = 11;
    case Pants = 12;
    case Decal = 13;
    case Avatar = 16;
    case Head = 17;
    case Face = 18;
    case Gear = 19;
    case Badge = 21;
    case GroupEmblem = 22;
    case Animation = 24;
    case Arms = 25;
    case Legs = 26;
    case Torso = 27;
    case RightArm = 28;
    case LeftArm = 29;
    case LeftLeg = 30;
    case RightLeg = 31;
    case Package = 32;
    case YoutubeVideo = 33;
    case GamePass = 34;
    case App = 35;
    case Code = 37;
    case Plugin = 38;
    case SolidModel = 39;
    case MeshPart = 40;

    /**
     * Gets the asset type's full name
     *
     * @return string
     */
    public function fullname(): string
    {
        return match($this)
        {
            self::TShirt => 'T-Shirt',
            self::GroupEmblem => 'Group Emblem',
            self::RightArm => 'Right Arm',
            self::LeftArm => 'Left Arm',
            self::LeftLeg => 'Left Leg',
            self::RightLeg => 'Right Leg',
            self::GamePass => 'Game Pass',
            default => $this->name
        };
    }

    /**
     * Checks if the asset is private and can only be downloaded by authorized users
     *
     * @return bool
     */
    public function isPrivate(): bool
    {
        return match($this)
        {
            self::Place => true,
            self::Model => true,
            self::Plugin => true,
            default => false
        };
    }

    /**
     * Gets the develop hub ID for this asset type
     * 
     * @return string
     */
    public function id(): string
    {
        return match($this) {
            self::Animation => 'animations',
            self::Audio => 'audio',
            self::TShirt => 't-shirt',
            self::Shirt => 'shirt',
            self::Pants => 'pants',
            self::Decal => 'decals',
            self::Mesh => 'meshes',
            self::Model => 'models',
            self::Place => 'game',
            self::Plugin => 'plugins',
            self::Lua => 'scripts',
            self::Hat => 'hat',
            self::Face => 'faces',
            self::Gear => 'gears',
            self::Head => 'heads',
            self::Package => 'packages'
        };
    }

    // kind of sucks but looks nicer on the URL side
    public static function fromString(string $type)
    {
        return match ($type) {
            'animations' => self::Animation,
            'audio' => self::Audio,
            't-shirt' => self::TShirt,
            'shirt' => self::Shirt,
            'pants' => self::Pants,
            'decals' => self::Decal,
            'meshes' => self::Mesh,
            'models' => self::Model,
            'game' => self::Place,
            'plugins' => self::Plugin,
            'scripts' => self::Lua,
            'hat' => self::Hat,
            'faces' => self::Face,
            'gears' => self::Gear,
            'heads' => self::Head,
            'packages' => self::Package,
            default => null,
        };
    }

    public static function wearableTypes(): array
    {
        return [
            self::TShirt,
            self::Shirt,
            self::Hat,
            self::Head,
            self::Package,
            self::Face,
            self::Pants,
            self::LeftArm,
            self::LeftLeg,
            self::RightArm,
            self::RightLeg,
            self::Torso,
            self::Head,
        ];
    }

    public function isWearable(): bool
    {
        return in_array($this, self::wearableTypes());
    }

    public static function sellableTypes(): array
    {
        return [
            self::Hat,
            self::TShirt,
            self::Shirt,
            self::Pants,
            self::Face,
            self::Head,
            self::Torso,
            self::RightArm,
            self::LeftArm,
            self::RightLeg,
            self::LeftLeg,
            self::Decal,
            self::Gear,
            self::Badge,
            self::Audio,
            self::Model
        ];
    }

    public function isSellable(): bool
    {
        return in_array($this, self::sellableTypes());
    }
}

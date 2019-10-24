<?php

namespace App\Models\Package;

use App\Models\Package\Attribute\PackageAttribute;
use App\Models\Package\Relationship\PackageRelationship;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Webpatser\Uuid\Uuid;

class Package extends Model
{
    //
    use PackageAttribute,PackageRelationship;

    protected $table = 'package';

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
    }
}

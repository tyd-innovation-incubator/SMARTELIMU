<?php

namespace App\Models\Package;

use App\Models\Package\Attribute\PackageAttribute;
use App\Models\Package\Relationship\PackageRelationship;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    use PackageAttribute,PackageRelationship;

    protected $table = 'package';
}

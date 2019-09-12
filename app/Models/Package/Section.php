<?php

namespace App\Models\Package;

use App\Models\Package\Attribute\SectionAttribute;
use App\Models\Package\Relationship\SectionRelationship;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use SectionAttribute,SectionRelationship;
    //
}

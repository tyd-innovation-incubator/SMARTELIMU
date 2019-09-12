<?php

namespace App\Models\Package;

use App\Models\Package\Attribute\SubjectAttribute;
use App\Models\Package\Relationship\SubjectRelationship;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use SubjectAttribute,SubjectRelationship;
    //
}

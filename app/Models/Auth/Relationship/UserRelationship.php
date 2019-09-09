<?php

namespace App\Models\Auth\Attribute;

use App\Models\Auth\Candidate;

trait UserRelationship
{

    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }
}
<?php

namespace App\Models\Sysdef\Relationship;


use App\Models\Sysdef\HelpGroup;

trait HelpContentRelationship
{
    public function helpGroup()
    {
        return $this->belongsTo(HelpGroup::class);
    }
}

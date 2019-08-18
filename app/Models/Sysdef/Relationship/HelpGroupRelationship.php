<?php

namespace App\Models\Sysdef\Relationship;


use App\Models\Sysdef\HelpContent;

trait HelpGroupRelationship
{
    public function helpContents()
    {
        return $this->hasMany(HelpContent::class);
    }
}

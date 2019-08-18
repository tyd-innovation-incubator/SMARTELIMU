<?php

namespace App\Models\Sysdef\Relationship;

use App\Models\Auth\User;

trait FeedbackRelationship
{
    /**
     * @return mixed
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}

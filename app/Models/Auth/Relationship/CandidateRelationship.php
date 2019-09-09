<?php
/**
 * Created by PhpStorm.
 * User: dontito
 * Date: 9/9/19
 * Time: 11:24 AM
 */

namespace App\Models\Auth\Relationship;


use App\User;

trait CandidateRelationship
{

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: dontito
 * Date: 9/9/19
 * Time: 11:24 AM
 */

namespace App\Models\Auth\Relationship;


use App\Models\Sysdef\Country;
use App\Models\Sysdef\Region;
use App\User;

trait CandidateRelationship
{

    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
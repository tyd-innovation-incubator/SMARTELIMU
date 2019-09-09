<?php

namespace App\Models\Auth;

use App\Models\Auth\Attribute\CandidateAttribute;
use App\Models\Auth\Relationship\CandidateRelationship;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Candidate extends Model
{
    use CandidateAttribute,CandidateRelationship;
    //

    protected $guarded = [];


    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
//        static::addGlobalScope(new IsactiveScope());
    }
}

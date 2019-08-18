<?php

namespace App\Models\Sysdef\Relationship;



use App\Models\Auth\User;
use App\Models\Sysdef\CodeValue;

trait FaqRelationship
{

    /*Relation to user*/
    public function user(){
        return $this->belongsTo(User::class);
    }


    /*Relation to logistic service*/
    public function logisticService()
    {
        return $this->belongsTo(CodeValue::class, 'logistic_service_cv_id', 'id');
    }


    /*Relation to Sub logistic service (sub category)*/
    public function logisticServiceCategory()
    {
        return $this->belongsTo(CodeValue::class, 'logistic_service_sub_cv_id', 'id');
    }

}
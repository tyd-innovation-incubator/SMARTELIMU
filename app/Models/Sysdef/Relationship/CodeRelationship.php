<?php

namespace App\Models\Sysdef\Relationship;

use App\Models\Auth\User;
use App\Models\Business\Commodity;
use App\Models\Business\Tender;
use App\Models\Business\TenderTran;
use App\Models\Information\News;
use App\Models\Stakeholder\Company;
use App\Models\Sysdef\Code;
use App\Models\Sysdef\CodeValue;
use App\Models\Sysdef\RoleCharge;

trait CodeRelationship
{



    public function codeValues(){
        return $this->belongsToMany(CodeValue::class, 'code_value_code','code_id' ,'code_value_id');
    }


}
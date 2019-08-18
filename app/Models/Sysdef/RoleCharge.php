<?php

namespace App\Models\Sysdef;

use App\Models\Auth\Role;
use Illuminate\Database\Eloquent\Model;

class RoleCharge extends Model
{

    public function period()
    {
        return $this->belongsTo(CodeValue::class, "payment_period_cv_id");
    }

    public function getAmountFormattedAttribute()
    {
        return number_2_format($this->amount);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

}

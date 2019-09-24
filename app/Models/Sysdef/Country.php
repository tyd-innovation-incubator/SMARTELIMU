<?php

namespace App\Models\Sysdef;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //


/*---------Attribute -------------*/

    /*Get Country flag*/
    public function getFlagAttribute()
    {
      //return "<span title='" . $this->name . "'>".@include('includes.country_flag' .',' . '[' . 'country_flag' . '=>' . $this->code . ']') . "</span>";
        return view('system.includes.country_flag')->with(['country_code' => $this->code, 'country_name' => $this->name]);
    }


    public function users()
    {
        return $this->hasMany(User::class);
    }

}

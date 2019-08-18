<?php

namespace App\Models\Sysdef;

use App\Models\Sysdef\Attribute\SysdefAttribute;
use App\Models\Sysdef\Relationship\SysdefRelationship;
use Illuminate\Database\Eloquent\Model;


class Sysdef extends Model
{
    use SysdefAttribute, SysdefRelationship;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public $timestamps = false;



    /**
     * RELATIONSHIP
     */

    public function sysdefGroup(){
        return $this->belongsTo(SysdefGroup::class);
    }
}

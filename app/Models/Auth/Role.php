<?php

namespace App\Models\Auth;

use App\Models\Auth\RoleAccess;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Auth\Relationship\RoleRelationship;
use App\Models\Auth\Attribute\RoleAttribute;
use OwenIt\Auditing\Auditable;

class Role extends Model
{
    use  RoleAttribute, RoleRelationship, RoleAccess;


    /**
     * @var array
     */
    protected $dates = ['deleted_at'];


    protected $guarded = [];

    /**
     * @var array
     */
    protected $auditableEvents = [
        'deleted',
        'updated',
        'restored',
    ];

}

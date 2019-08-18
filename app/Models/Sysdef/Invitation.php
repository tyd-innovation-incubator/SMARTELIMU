<?php
/**
 * Created by PhpStorm.
 * User: dontito
 * Date: 1/14/19
 * Time: 3:39 PM
 */

namespace App\Models\Sysdef;



use App\Models\Sysdef\Attribute\InvitationAttribute;
use App\Models\Sysdef\Relationship\InvitationRelationship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Invitation extends Model
{
    use InvitationAttribute, InvitationRelationship,Notifiable;


    protected $guarded = [];



}
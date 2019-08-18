<?php

namespace App\Models\Auth\Attribute;

/**
 * Class RoleAttribute
 * @package App\Models\Access\Attribute
 */
trait RoleAttribute
{

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

    /*Get Is free label*/
    public function getIsFreeLabelAttribute()
    {
        if ($this->isFree()){
            return __('label.yes');
        }else {
            return  __('label.no');
        }
    }

    /*Get Is Administrative label*/
    public function getIsAdministrativeLabelAttribute()
    {
        if ($this->isAdministrative()){
            return __('label.yes');
        }else {
            return  __('label.no');
        }
    }

    /*Check if is free*/
    public function isFree()
    {
        return $this->isfree == 1;
    }


    /*check if is administrative */
    public function isAdministrative()
    {
        return $this->isadministrative == 1;
    }

    /*Edit Button*/
    public function getEditButtonAttribute() {
            return '<a href="' . route('system.role.edit', $this->id) . '"  class="btn btn-xs btn-primary" ><i class="icon fa fa-edit" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.edit') . '"></i>'.' '. trans('buttons.general.crud.edit').'</a> ';

    }

}
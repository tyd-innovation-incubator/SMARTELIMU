<?php
/**
 * Created by PhpStorm.
 * User: mbelwamchayungu
 * Date: 2/21/19
 * Time: 4:54 PM
 */

namespace App\Models\Sysdef\Attribute;


trait HelpContentAttribute
{
    /**
     * @return string
     */
    public function getViewButtonAttribute(){
        return '<a href="'.route('help.profile', $this->uuid).'">'.trans('label.view').'</a> ';
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute(){
        return '<a class="btn btn-primary btn-xs" href="'.route('help.edit', $this->uuid).'">'.trans('label.crud.edit').'</a> ';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute(){
        return link_to_route('help.destroy',  __('buttons.general.crud.delete'), [$this->uuid], ['data-method' => 'delete', 'data-trans-button-cancel' => trans('buttons.general.cancel'), 'data-trans-button-confirm' => trans('buttons.general.confirm'), 'data-trans-title' => trans('label.warning'), 'data-trans-text' => trans('alert.system.help_contents.warning.delete'), 'class' => 'btn btn-danger btn-xs']);
    }
}

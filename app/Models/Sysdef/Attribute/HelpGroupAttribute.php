<?php

namespace App\Models\Sysdef\Attribute;


trait HelpGroupAttribute
{
    /**
     * @return string
     */
    public function getViewButtonAttribute(){
        return '<a href="'.route('help_group.profile', $this->uuid).'">'.trans('label.view').'</a> ';
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute(){
        return '<a class="btn btn-primary btn-xs" href="'.route('help_group.edit', $this->uuid).'">'.trans('label.crud.edit').'</a> ';
    }

    public function getContentsButtonAttribute(){
        return '<a class="btn btn-success btn-xs" href="'.route('help.index', $this->uuid).'">'.trans('label.contents').'</a> ';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute(){
        return link_to_route('help_group.destroy',  __('buttons.general.crud.delete'), [$this->uuid], ['data-method' => 'delete', 'data-trans-button-cancel' => trans('buttons.general.cancel'), 'data-trans-button-confirm' => trans('buttons.general.confirm'), 'data-trans-title' => trans('label.warning'), 'data-trans-text' => trans('alert.system.help_contents.warning.delete'), 'class' => 'btn btn-danger btn-xs']);
    }
}

<?php

namespace App\Models\Sysdef\Attribute;

trait FeedbackAttribute
{

    public function getReviewTextAttribute(){
        if($this->isreviewed == 1){
            return __('label.system.feedbacks.reviewed');
        } else {
            return __('label.system.feedbacks.reviewed_not');
        }
    }
    /**
     * @return mixed
     */
    public function getEmailFormattedAttribute(){
        if(isset($this->user->email)){
            return $this->user->email;
        } else {
            return $this->email;
        }
    }

    /**
     * @return mixed
     */
    public function getPhoneFormattedAttribute(){
        if(isset($this->user->phone)){
            return $this->user->phone;
        } else {
            return $this->phone;
        }
    }

    /**
     * @return mixed
     */
    public function getNameFormattedAttribute(){
        if(isset($this->user->name)){
            return $this->user->fullname;
        } else {
            return $this->name;
        }
    }

    /**
     * @return string
     */
    public function getViewButtonAttribute(){
        return '<a href="'.route('feedback.profile', $this->uuid).'">'.trans('label.view').'</a> ';
    }

    /**
     * @return string
     */
    public function getReviewButtonAttribute(){
        return link_to_route('feedback.review',  __('buttons.general.crud.review'), [$this->uuid], ['data-method' => 'post', 'data-trans-button-cancel' => trans('buttons.general.cancel'), 'data-trans-button-confirm' => trans('buttons.general.confirm'), 'data-trans-title' => trans('label.warning'), 'data-trans-text' => trans('alert.system.feedbacks.warning.review'), 'class' => 'btn btn-primary btn-xs']);
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute(){
        return link_to_route('feedback.destroy',  __('buttons.general.crud.delete'), [$this->uuid], ['data-method' => 'delete', 'data-trans-button-cancel' => trans('buttons.general.cancel'), 'data-trans-button-confirm' => trans('buttons.general.confirm'), 'data-trans-title' => trans('label.warning'), 'data-trans-text' => trans('alert.system.feedbacks.warning.delete'), 'class' => 'btn btn-danger btn-xs']);
    }
}

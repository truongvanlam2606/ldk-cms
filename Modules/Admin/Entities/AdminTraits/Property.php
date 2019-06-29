<?php

namespace Modules\Admin\Entities\AdminTraits;

trait Property{
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function getStatus(){
        return $this->status;
    }
    
    public function getStatusAsLabel(){
        return $this->status ? __('On') : __('Off');
    }
    public function getStatusAsClass(){
        return $this->status ? 'bg-success' : 'bg-warning';
    }    
}
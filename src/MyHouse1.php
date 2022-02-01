<?php
require_once('MyHouse.php');

class MyHouse1 extends MyHouse
{
    protected $color = 'text-primary';
    protected $size = '40px';

    public function getColor(){
        return $this->color;
    }

    public function getSize(){
        return $this->size;
    }

    public function generate(){
        parent::generate();
    }
}
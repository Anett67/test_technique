<?php
require_once('MyHouse.php');

class MyHouse2 extends MyHouse
{
    protected $color = 'text-success';
    protected $size = '60px';

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
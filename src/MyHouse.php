<?php

abstract class MyHouse
{
    protected $color;
    protected $size;

    protected function generate()
    {
        echo "<div class=" . $this->color . " style='font-size: " . $this->size . "'>
                <i class='fas fa-home'></i>
            </div>";
    }
}
<?php
namespace Car;

class Speed_up_down extends Car{
    public function speed_up(int $n){
        $this->speed += 10 * $n;
    }

    public function speed_down(int $n){
        $this->speed -= 10 * $n;
    }
}
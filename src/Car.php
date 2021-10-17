<?php
namespace Car;

class Car {
    private string $num;
    public int $speed;

    public function __construct(string $num) {
        $this->num = $num;
        $this->speed = 0;
    }

    public function getNum() {
        echo "Номер машины: $this->num" . "<br>";
    }

    public function getSpeed() {
        echo "Скорость машины $this->speed км/ч" . "<br>";
    }
}
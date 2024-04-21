<?php

trait ChangeableName {
    private $name;
    
    public function setName($name) {
        $this->name = $name;
    }
}

abstract class Animal {
    abstract public function sayHello();
}

interface Colorful {
    public function getColor();
}

class Cat extends Animal implements Colorful {
    use ChangeableName;
    
    private $color;
    
    public function __construct($name, $color) {
        $this->setName($name);
        $this->color = $color;
    }
    
    public function sayHello() {
        echo "Мене звуть {$this->name}, я маю {$this->color} колір!\n";
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getColor() {
        return $this->color;
    }
}

class 	Martes_foina extends Animal implements Colorful {
    use ChangeableName;
    
    private $color;
    
    public function __construct($name, $color) {
        $this->setName($name);
        $this->color = $color;
    }
    
    public function sayHello() {
        echo "Привіт, а я {$this->name}, я маю {$this->color} колір!\n";
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getColor() {
        return $this->color;
    }
}

$snowball = new Cat("Сніжок", "білий");
$barsik = new Cat("Барсик", "рудий");
$wolf = new Martes_foina("Куна", "сірий");

$snowball->setName("Снігур");
$barsik->setName("Мурчик");
$wolf->setName("Куна_куна");

$snowball->sayHello();
$barsik->sayHello();
$wolf->sayHello();

?>
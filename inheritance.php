<?php

class Hero {
    public $nama;
    public $attack;
    public $hp;

    public function __construct ($nama, $attack, $hp) {
        $this->nama =$nama;
        $this->attack =$attack;
        $this->hp =$hp;

    }
    public function skil(){
        echo "$this->nama menggunkan skill";
    }
}

class Mage extends Hero {
    public $mana;
    public $magic_attack;

    public function __construct($nama, $attack, $hp, $mana, $magic_attack){
        parent::__construct($nama, $attack, $hp);
        $this->mana = $mana;
        $this->magic_attack = $magic_attack;

    }
    
    public function skill(){
        echo "$this->magic_attack menggunkan magic skill";
    }
}
$kagura = new Mage("kagura",0, 3200,100,400);
echo $kagura->nama;
echo "<br>";
$kagura->skill();
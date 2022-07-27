<?php

class Character {
    public $name;
    public $class;
    public $level;
    public $hp;

    public function __construct($_name, $_class, $_level){
        $this->$name = $_name;
        $this->$class = $_class;
        $this->$level = $_level;
    }
     public function calculateHp(){
         $randomNumber = rand(1,10);
         $characterLevel = $this -> level;
         return $this -> hp = $randomNumber * $characterLevel;
     }


}
$legolas = new Character('Legolas','Arciere','8');
var_dump($legolas);

?>
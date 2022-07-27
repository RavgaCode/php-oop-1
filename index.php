<?php

class Movie {
    public $title;
    public $genre;
    public $releaseDate;
    public $status;

    public function __construct($_title, $_genre, $_releaseDate){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->releaseDate = $_releaseDate;
    }
    public function calculateStatus(){
         if(2022 - $this->releaseDate <2){
            $this-> status = 'New';
         } else{
            $this-> status = 'Old';
         }
        return $this->status;
     }
     public function getStatus(){
        return $this->status;
     }

}
$titanic = new Movie('Titanic','Romance','1997');
$titanic->getStatus();
var_dump($titanic);
var_dump($titanic->getStatus());

?>
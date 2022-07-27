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
     }
     public function getStatus(){
        return $this->status;
     }

}
$titanic = new Movie('Titanic','Romance','1997');
$titanic->calculateStatus();
var_dump($titanic);
var_dump($titanic->getStatus());

$topGun = new Movie('Top Gun: Maverick', 'Action','2022');
$topGun->calculateStatus();
var_dump($topGun);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>
</head>
<body>
    <div>
        <h2>Titolo:<?php echo($titanic->title); ?></h2>
        <h3>Genere:<?php echo($titanic->genre); ?></h3>
        <h4>Status:<?php echo($titanic->status); ?></h4>
    </div>
    <div>
        <h2>Titolo:<?php echo($topGun->title); ?></h2>
        <h3>Genere:<?php echo($topGun->genre); ?></h3>
        <h4>Status:<?php echo($topGun->status); ?></h4>
    </div>
</body>
</html>
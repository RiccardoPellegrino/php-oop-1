<?php

include_once __DIR__ . '/models/Movie.php';


$movie = new Movie("Batman begins", 2005, 8.5, array("Azione", "Thriller", "Drammatico"));

$movie2 = new Movie("Io sono leggenda", 2007, 9.0, array("Azione", "Fantascienza", "Orrore"));


$movie -> stampa();
echo "<br>";
$movie2 -> stampa();
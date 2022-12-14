<?php
class Movie
{

    public $title;
    public $year_of_relase;
    public $vote;
    public $generes;


    public function __construct(string $_title, int $_year, float $_rating, array $_generes)
    {
        $this->title = $_title;
        $this->year_of_relase = $_year;
        $this->vote = $_rating;
        $this->generes = $_generes;
    }

    public function stampa()
    {
        echo "Titolo: " . $this->title . "<br>";
        echo "Anno di uscita: " . $this->year_of_relase . "<br>";
        echo "Voto: " . $this->vote . "<br>";
        echo "Generi : ";
        foreach ($this->generes as $genere) {
            echo $genere . " , ";
        }
        echo "<br>";
    }
}
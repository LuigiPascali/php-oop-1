<?php

    class Movie
    {
        
        public $title;
        public $director;
        public $year;

        public function __construct($title, $director, $year)
        {
            $this->title = $title;
            $this->director = $director;
            $this->year = $year;
        }

        
        public function printInfo()
        {
            echo "Titolo: {$this->title}\n";
            echo "Regista: {$this->director}\n";
            echo "Anno: {$this->year}\n";
        }
    }


    $movie1 = new Movie("Memento", "Christopher Nolan", 2000);
    $movie2 = new Movie("Amici Miei Atto Primo", "Pietro Germi", 1975);


    echo "Film 1:\n";
    $movie1->printInfo();
    echo "\nFilm 2:\n";
    $movie2->printInfo();

?>

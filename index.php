<?php

    class Movie
    {
        
        public $title;
        public $director;
        public $year;

        // BONUS 1:
        public $genres;

        public function __construct($title, $director, $year, $genres,)
        {
            $this->title = $title;
            $this->director = $director;
            $this->year = $year;

            // BONUS 1:
            $this->genres = $genres;
            
        }

        
        public function printInfo()
        {
            echo "Titolo: {$this->title}\n";
            echo "Regista: {$this->director}\n";
            echo "Anno: {$this->year}\n";

            // BONUS 1:
            echo "Generi: " . implode(', ', $this->genres) . "\n";
        }
    }


    $movie1 = new Movie("Memento", "Christopher Nolan", 2000, ["Thriller", "Thriller Psicologico", "Drama"] );
    $movie2 = new Movie("Amici Miei Atto Primo", "Pietro Germi", 1975, ["Commedia", "Grottesco", "Commedia all'italiana"]);


    echo "Film 1:\n";
    $movie1->printInfo();
    echo "\nFilm 2:\n";
    $movie2->printInfo();

?>

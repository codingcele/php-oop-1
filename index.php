<?php

    class Duration {

        public $hours;
        public $minutes;

        public function __construct($hours, $minutes) {

            $this -> hours = $hours;
            $this -> minutes = $minutes;

        }

        public function getDuration() {

            return $this -> hours . " : " . $this -> minutes;
        }
    }

    class Movie {

        public $title;

        public $plot;

        public $duration;

        public $direction;

        public $screenplay;

        public $cast;

        public function __construct($title, $plot, $duration, $direction, $screenplay, $cast) {

            $this -> title = $title;
            $this -> plot = $plot;
            $this -> duration = $duration;
            $this -> direction = $direction;
            $this -> screenplay = $screenplay;
            $this -> cast = $cast;

        }

        public function getHtml() {

            return "Title: " . $this -> title
            . "<br>plot: " . $this -> plot
            . "<br>duration: " . $this -> duration -> getDuration()
            . "<br>direction: " . $this -> direction
            . "<br>screenplay: " . $this -> screenplay
            . "<br>cast: " . $this -> cast;
        }

    }


    $duration1 = new Duration("1","57");
    $duration2 = new Duration("2","23");


    $movie1 = new Movie("Fury", "Un comandante di carri armati deve prendere decisioni difficili quando lui e il suo equipaggio combattono in Germania nell'aprile del 1945.", $duration1, "David Ayer", "David Ayer", "Brad Pitt");

    $movie2 = new Movie("The Trench", "Narra le 48 ore precedenti la catastrofica battaglia della Somme avvenuta nel luglio del 1916. Quella della Somme fu una delle più grandi battaglie della prima guerra mondiale, con più di un milione fra morti, feriti e dispersi. Gli eserciti britannico e francese tentarono di spezzare le linee tedesche lungo un fronte di 40 chilometri a nord e a sud del fiume Somme nella Francia settentrionale.", $duration2, "William Boyd", "William Boyd", "Daniel Craig");


    echo $movie1 -> getHtml();
    echo "<br><br>";
    echo $movie2 -> getHtml();

?>
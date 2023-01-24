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

    class Actor {

        public $name;
        public $surname;

        public function __construct($name, $surname) {

            $this -> name = $name;
            $this -> surname = $surname;

        }

        public function getActor() {

            return $this -> name . " " . $this -> surname;
        }

    }

    class Movie {

        public $title;

        public $plot;

        public array $genere;

        public $duration;

        public $direction;

        public $screenplay;

        public array $cast;

        public function __construct($title, $plot, array $genere, $duration, $direction, $screenplay, array $cast) {

            $this -> title = $title;
            $this -> plot = $plot;
            $this -> genere = $genere;
            $this -> duration = $duration;
            $this -> direction = $direction;
            $this -> screenplay = $screenplay;
            $this -> cast = $cast;

        }

        public function getCast() {

            $actorStr = "";
            foreach ($this -> cast as $actors) {
                
                $actorStr .= $actors -> getActor() . " ";
                
            }
            return $actorStr;
        }

        public function getGenere() {

            $genereStr = "";
            foreach ($this -> genere as $gene) {
                
                $genereStr .= $gene . " ";
                
            }
            return $genereStr;
        }

        public function getHtml() {

            return "Titolo: " . $this -> title
            . "<br>Trama: " . $this -> plot
            . "<br>Genere: " . $this -> getGenere()
            . "<br>Durata: " . $this -> duration -> getDuration()
            . "<br>Regia: " . $this -> direction
            . "<br>Sceneggiatura: " . $this -> screenplay
            . "<br>Cast: " . $this -> getCast();

        }

    }


    $duration1 = new Duration("1","57");
    $duration2 = new Duration("2","23");
    $duration3 = new Duration("1","55");

    $actor1 = new Actor("Brad", "Pitt");
    $actor2 = new Actor("Shia", "LaBeouf");
    $actor3 = new Actor("Logan", "Lerman");
    $actor4 = new Actor("Daniel", "Craig");
    $actor5 = new Actor("Paul", "Nicholls");
    $actor6 = new Actor("Sosie", "Bacon");
    $actor7 = new Actor("Kyle", "Gallner");
    $actor8 = new Actor("Caitlin", "Stasey");

    $actors1 = [$actor1, $actor2, $actor3];
    $actors2 = [$actor4, $actor5];
    $actors3 = [$actor6, $actor7, $actor8];

    $genere1 = "Horror";
    $genere2 = "Drammatico";
    $genere3 = "Guerra";
    $genere4 = "Comico";
    $genere5 = "Storico";

    $generi1 = [$genere3, $genere2, $genere5];
    $generi2 = [$genere3, $genere2];
    $generi3 = [$genere1];

    $movie1 = new Movie("Fury", "Un comandante di carri armati deve prendere decisioni difficili quando lui e il suo equipaggio combattono in Germania nell'aprile del 1945.", $generi1, $duration1, "David Ayer", "David Ayer", $actors1);

    $movie2 = new Movie("The Trench", "Narra le 48 ore precedenti la catastrofica battaglia della Somme avvenuta nel luglio del 1916. Quella della Somme fu una delle più grandi battaglie della prima guerra mondiale, con più di un milione fra morti, feriti e dispersi. Gli eserciti britannico e francese tentarono di spezzare le linee tedesche lungo un fronte di 40 chilometri a nord e a sud del fiume Somme nella Francia settentrionale.", $generi2, $duration2, "William Boyd", "William Boyd", $actors2);

    $movie3 = new Movie("Smile", "In un reparto psichiatrico, la psichiatra Dr. Rose Cotter incontra una paziente ricoverata di recente, Laura Weaver, una studentessa di dottorato che ha assistito al suicidio del suo professore, e che afferma di essere l'unica a vedere un'entità che finge di essere altre persone che le sorridono. D'un tratto, Laura ha un attacco di panico e le convulsioni, e mentre Rose chiede aiuto, Laura le sorride prima di tagliarsi la gola con un frammento di un vaso rotto.", $generi3, $duration3, "Parker Finn", "Francesco Franceschini", $actors3);

    $movies = [$movie1, $movie2, $movie3];

    foreach ($movies as $movie) {
                
        echo $movie -> getHtml();
        echo "<br><br>";
        
    }

?>
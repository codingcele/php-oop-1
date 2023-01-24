<?php

    class Movie {

        public $title;

        public $plot;

        public $duration;

        public $direction;

        public $screenplay;

        public function __construct($title, $plot, $duration, $direction, $screenplay) {

            $this -> title = $title;
            $this -> plot = $plot;
            $this -> duration = $duration;
            $this -> direction = $direction;
            $this -> screenplay = $screenplay;

        }

    }

?>
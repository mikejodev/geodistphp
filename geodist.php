<?php
/*
 * This program calculates the approximate distance between two coordinates on a geographical map.
 * 
 * @author  mikejodev <post@go2be.ru>
 * @version 1.0
 * 
 * @method distance(params) return (float)
 * @method __debug() void
 * @method getUnit() return $this->unit (string)
 * 
 */

    class geoDist {
        
        private $lat1;
        private $lat2;
        private $lon1;
        private $lon2;
        public $dist;
        private $unit;
        
        const MILES = 0.62150404;

        /*
        * @param bool $unit - Measure unit
        * false -> miles
        * true -> kilometers
        */
        public function __construct($unit=true) {
            $this->unit = $unit;
        }
        /*
        * @param (float) $lat1 - latitude of point A
        * @param (float) $lon1 - longitude of point A
        * @param (float) $lat2 - latitude of point B
        * @param (float) $lon2 - longitude of point B
        * @return (float) round(,4)
        */
        public function distance(float $lat1, float $lon1, float $lat2, float $lon2) {
            $this->lat1 = $lat1 * M_PI / 180;
            $this->lon1 = $lon1 * M_PI / 180;
            $this->lat2 = $lat2 * M_PI / 180;
            $this->lon2 = $lon2 * M_PI / 180;
            
            $this->dist = atan(sqrt(pow((cos($this->lat2)*sin($this->lon2-$this->lon1)), 2)+pow((cos($this->lat1)*sin($this->lat2) - sin($this->lat1)*cos($this->lat2)*cos($this->lon2-$this->lon1)), 2))/(sin($this->lat1)*sin($this->lat2) + cos($this->lat1)*cos($this->lat2)*cos($this->lon2-$this->lon)))*6372795/1000;
            if ($this->unit == false)
                return round($this->dist*MILES, 4);
            else 
                return round($this->dist, 4);
        }
        
        /*
         * This function allows you to get the active unit of measurement
         * 
         * @return string
         * 
         */
        public function getUnit() {
            if ($this->unit == true) 
                return ' km';
            else 
                return ' miles';
        }
        
        public function __debug() {
            echo 'DEBUG INFO ($THIS):<pre>';
            var_dump($this);
            echo '</pre>';
        }
    }
?>
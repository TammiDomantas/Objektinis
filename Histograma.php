<?php
include_once 'Skaicius.php';
class Histograma extends Skaicius{
    public $Daznis = array();
    public $Reiskme = array();
    public $max;
    public function histogramos_skaiciavimas(){
        $this->max = 0;
        for($x = $this->intpirmas; $x < $this->intgalinis; $x++){
            if($this->IntIteracijos[$x] > $this->max)$this->max = $this->IntIteracijos[$x];
        }
        for($x = 0; $x < $this->max; $x++){
            $this->Daznis[$x] = 0;
            $this->Reiksme[$x] = $x;
        }
        for($x = 0; $x < $this->max;$x++){
            for($i = $this->intpirmas; $i < $this->intgalinis; $i++){
                                                                    if($x == $this->IntIteracijos[$i])$this->Daznis[$x]++;
                                                                    }
        }
    }
    public function histogramos_isvedimas(){
        for($x = 0; $x < $this->max; $x++){
            if($this->Daznis[$x] > 0)echo "Iteraciju skaicius: ", $this->Reiksme[$x], " Daznis: ", $this->Daznis[$x], "<br>";
        }
    }
}
?>
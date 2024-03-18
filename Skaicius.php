<?php
class Skaicius{
    public $vienas;
    public $vienoiteracijos;
    public $intpirmas;
    public $intgalinis;
    public $pirmprog;
    public $n;
    public $skirtumas;
    public $proggal; 
    public $IntIteracijos = array();
    public $IntMaksimumas = array();
    public $MaxIt; // didziausias iteraciju skaicius
    public $MaxItsk; // skaicius turintis didziausia iteraciju skaiciu
    public $MinIt; // maziausias iteraciju skaicius
    public $MinItsk; // skaicius turintis didziausia iteraciju skaiciu
    public $MaxRk; // didziausia reiksme
    public $MaxRkSk; // skaicius turintis didziausia reiksme
    function set($vienas,$intpirmas, $intgalinis, $pirmprog, $n, $skirtumas){
    $this->vienas = $vienas;
    $this->intpirmas = $intpirmas;
    $this->intgalinis = $intgalinis;
    $this->pirmprog = $pirmprog;
    $this->n= $n;
    $this->skirtumas = $skirtumas;    
    }
    function progresija(){
        $sk = $this->pirmprog;
        for($x = 1; $x < $this->n;$x++){
        $sk = $sk + $this->skirtumas;    
        }
        $this->proggal = $sk;
    }
    function progresija_isvedimas(){
      echo $this->proggal;   
    }
    function get_vienas(){
    return $this->vienas;
    }
    function iteraciju_skaicius(){
        $sk = $this->vienas;
        $it = 0;
        while($sk != 1){
            if($sk % 2 == 0)$sk = $sk / 2;
			else $sk = 3 * $sk + 1;
			echo $sk, "\n";
		    $it = $it + 1;
              }
        $this->iteracijosv = $it;
    }
    function iteraciju_isvedimas(){
    return $this->iteracijosv;
    }
    function intervalo_skaiciavimas(){
        $maxit = 0; // didziausias iteracijus skaicius
        $maxitsk; // skaicius turintis didziausia iteraciju skaiciu
        $minit = 10000; // maziausias iteraciju skaicius
        $minitsk; // skaicius turintis didziausia iteraciju skaiciu
        $maxrk = 0; // didziausia reiksme
        $maxrksk; // skaicius turintis didziausia reiksme
        for($x = $this->intpirmas; $x <= $this->intgalinis;$x++){
            $this->IntIteracijos[$x]= 0;
            $this->IntMaksimumas[$x]= 0;
            $sk = $x;
            while($sk != 1){
                if($sk % 2 == 0)$sk = $sk / 2;
                else $sk = 3 * $sk + 1;
                $this->IntIteracijos[$x]++;
                if($sk > $this->IntMaksimumas[$x])$this->IntMaksimumas[$x]= $sk;
                          }
            if($this->IntIteracijos[$x] > $maxit){$maxit = $this->IntIteracijos[$x];
                                        $maxitsk = $x;
                                        }
            if($this->IntIteracijos[$x] < $minit){$minit = $this->IntIteracijos[$x];
                                        $minitsk = $x;
                                        }
            if($this->IntMaksimumas[$x] > $maxrk){$maxrk = $this->IntMaksimumas[$x];
                                        $maxrksk = $x;
                                        }
        }
        $this->MaxIt = $maxit;
        $this->MaxItsk = $maxitsk;
        $this->MinIt = $minit;
        $this->MinItsk = $minitsk;
        $this->MaxRk = $maxrk;
        $this->MaxRkSk = $maxrksk;
    }
    function intervalo_isvedimas(){
        for($x = $this->intpirmas; $x <= $this->intgalinis;$x++){
            echo "skaicius: ", $x, " Iteraciju skaicius: ", $this->IntIteracijos[$x], " Maksimali reiksme: ", $this->IntMaksimumas[$x];
            echo "</br>";
                    }
        echo "Didziausias iteraciju skaicius:", $this->MaxIt, " gautas is pradinio skaiciaus ", $this->MaxItsk;
        echo "</br>";
        echo "Maziausias iteraciju skaicius:", $this->MinIt, " gautas is pradinio skaiciaus ", $this->MinItsk;
        echo "</br>";
        echo "Didziausia pasiekta reiksme:", $this->MaxRk, " gautas is pradinio skaiciaus ", $this->MaxRkSk;      
    }
}
?>
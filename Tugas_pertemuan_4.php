<?php
class Mobi{
      public $nama;
      public $bensin;


      public function __construct($nama, $bensin){
        $this->nama =$nama;
        $this->bensin = $bensin;
    }
    public function mogok(){
        echo "$this->nama mogok";
    }
}

class Mogok extends Mobi {
    public $berhenti;

    public function __construct($nama, $bensin, $berhenti)
    {
        parent::__construct($nama, $bensin, $berhenti);
        $this->berhenti =$berhenti;
        
    }

    public function mogokk(){
        echo "$this->bensin habis mobil jadi mogokk";

    }
}

$kijang = new Mogok ("mobil kijang","bensin habis", "berhenti");
echo $kijang->nama ;
echo "<br>";
$kijang->mogokk();


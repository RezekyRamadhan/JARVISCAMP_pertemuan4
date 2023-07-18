<?php
class Mobil {
    private $merk;
    private $warna;

    public function setMerk($merk){
        $this->merk = $merk;
    }
    public function getMerk(){
        echo $this->merk;
    }

    public function setWarna($warna){
        $this->warna =$warna;
    }

    public function getWarna(){
       echo $this->warna;
    }
    public function hidupkanMesin(){

        echo "mesin mobil dihidupkan";
    }
    public function jalan(){
        echo "mobil hidup";
    }
}

$toyota = new Mobil();
$toyota->setMerk ("toyota");
$toyota->setWarna ("hitam");
$toyota->getMerk();
echo '<br>';
$toyota->hidupkanMesin();
echo '<br>';
$toyota->jalan();
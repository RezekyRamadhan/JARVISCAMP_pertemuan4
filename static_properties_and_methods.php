<?php
class Kucing{
    public $nama;
    public static $jumlah = 0;

    public function __construct($nama){
        self::$jumlah++;
        $this->nama =$nama;
    }
    public static function getJumlahKucing(){
        echo "<br> Jumlah Kucing :". self::$jumlah;
    }
}
$oyen = new Kucing("oyen");
Kucing::getJumlahKucing();

$bleki = new Kucing("bleki");
Kucing::getJumlahKucing();
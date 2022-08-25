<?php

class Magic{
    public $nama;
    public $jenis_kelamin;
    public $umur;
    
    public function setNama($NamaOrang)
    {
       return $this->nama = $NamaOrang;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setJenis($JenisOrang)
    {
       return $this->jenis_kelamin = $JenisOrang;
    }

    public function getJenis()
    {
        return $this->jenis_kelamin;
    }

    public function setUmur($UmurOrang)
    {
       return $this->umur = $UmurOrang;
    }

    public function getUmur()
    {
        return $this->umur;
    }

    public function __tostring()
{
    return 'Hai, nama saya adalah : '. $this->nama. PHP_EOL . 'Umur saya : '. $this->umur . PHP_EOL . 'Jenis Kelamin saya : '. $this->jenis_kelamin;
}


    function nama() {
        return $this;
    }

    function jenis_kelamin() {
        return $this;
    }

    function umur() {
        return $this;
    }
}


$magic = new Magic();
$magic->setNama("Aldi Safrudin");
$magic->setJenis("Laki-Laki");
$magic->setUmur(18);

echo $magic->jenis_kelamin('Laki-Laki')->umur(18);

?>
<?php
class Manusia {
    public $tgl_lahir;
    protected $jenis_kelamin;
    public $umur;
    public $status;
    public $hobi;


    public function makan() {
        return " Saya ingin menjadi sukses";
    }
    public function minum() {
        return "dan bahagia";
    }
    public function ambil_status ($status_saat_ini){
        return $this->status = $status_saat_ini;
        //$status visibilitas private
        //makan harus dibuatkan method untuk mengakses
    }
    public function statusku(){
        return "Mahasiswa";
    }
}

class wanita extends Manusia {
    public function jk ($jk){
        //$jk visibilitas protected
        //maka harus dibuatkan method untuk mengakses dari turunan
        return $this-> jenis_kelamin = $jk;
    }
    
    public function data_diri(){
    $data1 ="<br/>Saya mahasiswa UNS PSDKU <br/> Nim saya V3920036 dan lahir $this->tgl_lahir<br/>umur 19 tahun $this->status<br/>Saya ingin segera lulus <br/>".$this->jenis_kelamin;
    return$data1;

    }
}
    $saya = new wanita;
    $saya->tgl_lahir = "21 Mei 2002";
    $saya->jk = ("Perempuan");
    $saya->ambil_status("Mahasiswa");

/*
$saya->status = "Mahasiswa";
jika ditulis akan error karena Private
*/
echo $saya->data_diri();
echo "<hr>";
echo $saya->makan();
echo "<hr>";
echo $saya->minum();
echo "<hr>";

?>
<?php
    class karyawan extends master{
        public $idkaryawan=[];
        public $nama=[];
        public $alamat=[];
        public $notelepon=[];
        private $tabel="karyawan";
        private $arr=array("idkaryawan","nama","alamat","notelepon");

        public function __construct(){
            parent::__construct($this->arr,$this->tabel);
        }
       
    }

    $karyawan=new karyawan();
    $karyawan->get();
    $karyawan->show();

    if(isset($_GET['indeks'])){
        $karyawan->edit($_GET['indeks']);
    }
?>
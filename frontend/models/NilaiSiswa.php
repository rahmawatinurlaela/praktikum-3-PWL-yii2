<?php
namespace frontend\models;

class NilaiSiswa{
	public $nim;
	public $nama;
	public $nilai;

	//konstruktor class
	public function __construct($nim, $nama){
		$this->nim = $nim;
		$this->nama = $nama;
	}

	public function kelulusan(){
		if($this->nilai > 55){
			return "LULUS";
		}
		else{
			return "TIDAK LULUS";
		}
	}
}
?>
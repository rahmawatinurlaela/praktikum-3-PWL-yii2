<?php
namespace frontend\models;

use Yii;
use yii\base\Model;

class DataDosen{
	public $nidn;
	public $nama;
	public $idprodi;

	//konstruktor class
	public function __construct($nidn, $nama){
		$this->nidn = $nidn;
		$this->nama = $nama;
	}
	public function idprodi(){
		if($this-> idprodi ==1){
			return "Sistem Informasi";
		}
		else if($this-> idprodi ==2){
			return "Teknik Informatika";
		}
		else
			return "Prodi Tidak Tersedia";
	}
}
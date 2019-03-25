<?php

namespace frontend\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$mhs1 = "Rahmawati Nurlaela";
    	$mhs2 = "Sri Defi Isnaeni";
    	$mhs3 = "Syifa Tazkiy Fauziyah";
    	$mhs4 = "M. Abdul Karim";
    	$mhs5 = "M. Ghilman";
    	$prodi1 = "Sistem Informasi";
    	$prodi2 = "Teknik Informatika";
    	$smt1 = "2";
    	$smt2 = "4";
    	$smt3 = "6";
    	$smt4 = "8";

        return $this->render('index', [
        	'mhs1' => $mhs1,
        	'mhs2' => $mhs2, 
        	'mhs3' => $mhs3, 
        	'mhs4' => $mhs4, 
        	'mhs5' => $mhs5, 
        	'si' => $prodi1, 
        	'ti' => $prodi2, 
        	'smt1' => $smt1, 
    		'smt2' => $smt2,
    		'smt3' => $smt3,
		    'smt4' => $smt4

        ]);
    }

}

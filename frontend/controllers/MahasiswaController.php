<?php

namespace frontend\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$prodi1 = "Sistem Informasi";
    	$prodi2 = "Teknik Informatika";
    	$mhs1 = "Rahmawati Nurlaela";
    	$mhs2 = "Atrisa Endya";
    	$mhs3 = "Muhammad Achdiat Fata";
    	$mhs4 = "Nabilah fajar Utami";
    	$mhs5 = "Rahmat Panji";


        return $this->render('index', [
        	'si' => $prodi1, 
        	'ti' => $prodi2, 
        	'mhs1' => $mhs1,
        	'mhs2' => $mhs2, 
        	'mhs3' => $mhs3, 
        	'mhs4' => $mhs4, 
        	'mhs5' => $mhs5
        ]);
    }

}

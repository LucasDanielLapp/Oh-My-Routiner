<?php
//Llamamos a el controler
require('model/model.php');
require('controler/controler.php');
//Framework
//Inicializamos el controler
$controler = new Controler;
//puse el framewors aca por dos razones : 1 tiene que ser lo primero que se ejecute , 2 tiene un if para de igaul forma ejecutarse cuando yo diga.
require('resource/FPDF/fpdf.php');
$controler->PDF();
$controler->Plantilla();
$controler->EnlaceControler();
?>

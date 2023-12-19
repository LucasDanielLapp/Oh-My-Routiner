<?php
//Llamamos a el controler
require('model/model.php');
require('controler/controler.php');
//Inicializamos el controler
$controler = new Controler;
$controler->Plantilla();
$controler->EnlaceControler();
?>

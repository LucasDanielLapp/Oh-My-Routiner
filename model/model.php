<?php 
  //Logica de los enlaces 
  class EnlacesPagina{
  //èsta funcion recive en enlace y dice què hacer con el
    public static function Verificar($enlace){
      if($enlace == "Home" || $enlace == "creationPDF"){
        $module = "view/pages/".$enlace.".php" ;
      }else{
        $module = "view/pages/"."Home".".php";
      }if(isset($_GET['hour1'])){//Esta ùltmica verificaciòn es la que se envia desde el formalario
        //Aca estamos verificaondo si se mando informacion por url , si es asi lo re dirijimos a la pàgina de result
        //Primero antes de saber el valor de los datos hay que contar las filas y columnas
        $taskNum = $_GET['taskNum'];
        $hourNum = $_GET['hourNum'];
        //recorrer las filas
        echo $taskNum;
        for($i = 0;$i <= $taskNum;$i++){
          //recorremos las columnas
          $Task = $_GET['Task'.$i];
          echo $Task;
        }
        for($j = 0; $j < $hourNum ; $j++){
          //recoremos las filas
          $hora = $_GET['hour1'];
          echo $hora;
        }
        $module = 'view/pages/result.php';
      }
       return $module;
    }
  }
?>
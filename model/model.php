<?php 
  //Logica de los enlaces 
  class EnlacesPagina{
  //èsta funcion recive en enlace y dice què hacer con el
    public static function Verificar($enlace){
      if($enlace == "Home" || $enlace == "creationPDF"){
        $module = "view/pages/".$enlace.".php" ;
      }else{
        $module = "view/pages/"."Home".".php";
      }if(isset($_GET['columns'])){//Esta ùltmica verificaciòn es la que se envia desde el formalario
        //Aca estamos verificaondo si se mando informacion por url , si es asi lo re dirijimos a la pàgina de result
        //Primero antes de saber el valor de los datos hay que contar las filas y columnas
        $columns = $_GET['columns'];
        $rows = $_GET['rows'];
        //llamas al framework

        //recorrer las filas
        for($i = 0;$i <= $rows;$i++){
          //recorremos las columnas
          $Task = $_GET['rows'.$i];
          echo $Task;
        }
        for($j = 1;$j <= $columns;$j++){
          //recorremos las columnas
          $hour = $_GET['columns'.$j];
          echo $hour;
        }
        $module = 'view/pages/result.php';
      }
       return $module;
    }
  }
?>
<?php 
  //Logica de los enlaces 
  class EnlacesPagina{
  //èsta funcion recive en enlace y dice què hacer con el
    public static function Verificar($enlace){
      if($enlace == "Home" || $enlace == "creationPDF"){
        $module = "view/pages/".$enlace.".php" ;
      }else{
        $module = "view/pages/"."Home".".php";
      }if(isset($_GET['columns'])){
        //Esta ùltmica verificaciòn es la que se envia desde el formalario
        //Aca estamos verificaondo si se mando informacion por url , si es asi lo re dirijimos a la pàgina de result
        //Primero antes de saber el valor de los datos hay que contar las filas y columnas
        $columns = $_GET['columns'];//columns es la cantidad total de columns1 igual rows
        $rows = $_GET['rows'];
        //instancia del framework
        //recorrer las filas
        for($i = 0;$i <= $rows;$i++){
          //recorremos las columnas
          $Task = $_GET['rows'.$i];
        }
        for($j = 1;$j <= $columns;$j++){
          //recorremos las columnas
          $hour = $_GET['columns'.$j];
        }
        return $module = 'view/pages/result.php';
      }
       return $module;
    }
    public static function CreationPDF(){
      if(isset($_GET['columns'])){
        try {
          $pdf = new FPDF();
          $pdf->AddPage();
          $pdf->SetFont('Arial','B',16);
          $pdf->Cell(40,10,'Hello World!');
          $pdf->Output();
        } catch (Exception $e) {
          echo 'Excepción capturada soy yo: ',  $e->getMessage(), "\n";
        }
      }
    }
  }
?>
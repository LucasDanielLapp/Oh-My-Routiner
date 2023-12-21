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
        return $module = 'view/pages/result.php';
      }
       return $module;
    }
    public static function CreationPDF(){
      if(isset($_GET['columns'])){
        //the velue dad
        
        $columns = $_GET['columns'];
        $rows = $_GET['rows'];
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',10);
        $pdf->setX(25);
        $pdf->Cell(32,10,'Gracias por utilizar nuestro servicios',0,1,'C');
        $pdf->Cell(32,10,'Horario',1,0,'C');
        $pdf->Cell(32,10,'Lunes',1,0,'C');
        $pdf->Cell(32,10,'Martes',1,0,'C');
        $pdf->Cell(32,10,'Miercoles',1,0,'C');
        $pdf->Cell(32,10,'Jueves',1,0,'C');
        $pdf->Cell(32,10,'Viernes',1,1,'C');
        for($i = 1; $i <= $columns;$i++){
          $Hour = $_GET['columns'.$i];
          $pdf->Cell(32,10,$Hour,1,1,'C');
        }
        $Y = 0;
        $pdf->setXY(42,20);
        for($j = 1; $j <= $rows;$j++){
        $pdf->SetFont('Arial','B',8);
          $Task = $_GET['rows'.$j];
          if($j == 6){
            $pdf->setXY(42,30);
            $pdf->Cell(32,10,utf8_decode($Task),1,0,'C');
          }else{
            $pdf->Cell(32,10,utf8_decode($Task),1,0,'C');
          }if($j % 5 == 0){
            $pdf->Cell(32,10,utf8_decode($Task),0,1,'C');
            $pdf->setX(42,30);
          }
        }
        $pdf->Output();
      }
    }
  }
?>
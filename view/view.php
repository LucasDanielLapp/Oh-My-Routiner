<?php
if(isset($_GET['action'])){
        $cssName = 'creationPDF';
}else{
      $cssName = "home";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Oh my routiner es un software desarrollado por el programador Lapp Lucas Daniel, que nos permite horganizar 
    mucho mejor nuestro timepo. Permitìendonos incluso poder descargarlo para siempre tener a mano nuestra rutina personlizable.">
    <meta name="keywords" content="oh my routiner">
    <meta name="robots" content="index"/>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="resource/bootstrap5/css/bootstrap.min.css">
    <!--Style native -->
    <link rel="stylesheet" type="text/css" href="resource/css/<?php echo $cssName; ?>.css">
    <link rel="icon" href="resource/icon-img/icono.ico" type="image/png">
    <title>Oh My Routiner</title>
</head>
<body>
<script src="resource/bootstrap5/js/bootstrap.bundle.min.js"></script>
</body>
</html>

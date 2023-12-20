<?php 
class Controler{
	public function Plantilla(){
		require('view/view.php');
	}

	public function EnlaceControler(){
		//Una vez màs estamos verificando (ya lo estabamos verificando en model) si la variable GET no trae un resultado
		//Ve a la pàgina index
		if(isset($_GET['action'])){
			$enlace = $_GET['action'];
		}else{
		  $enlace = "Home";
		}
		//Lo que aremos a continuaciòn sera enviar nuestra variable al model para varificar si en valida o no y nos devolverà un resultado 
		//$res es el resultado de ese analisis, en caso de que la url que enviamos , no sea valida , nos mandara automaticamente a Home.php 
		$res = EnlacesPagina::Verificar($enlace);
		//Luego del analisis y de confimar si es valida o no , daremos el resultado conrrespondiente
		//Verificamos si mandamos los datos del furmario antes,para saber a que pàgina mandamos 
		include ($res);
		//Recuerda que esto es solo para segurity url no segurity fill, eso se configura en tu servidor de perferencia(apache server)
	}

	public function PDF(){
		EnlacesPagina::CreationPDF();
	}
}
?>

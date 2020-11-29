<?php 
	$conexion=mysqli_connect('localhost','','','');

	$dir=$_POST['dir'];
	$anio=$_POST['anio'];
	$mes=$_POST['mes'];
		$fecdeentrega=$_POST['fecdeentrega'];
		$fecdesalida=$_POST['fecdesalida'];
		$fecprogpdi=$_POST['fecprogpdi'];
				$cliente=$_POST['cliente'];
				$ruc=$_POST['ruc'];
				$tipo=$_POST['tipo'];
			
		
			$origen=$_POST['origen'];
			$destino=$_POST['destino'];
		
				$marca=$_POST['marca'];
		$modelo=$_POST['modelo'];
			$color=$_POST['color'];
			$vin=$_POST['vin'];
		$concesionario=$_POST['concesionario'];
			$situacion=$_POST['situacion'];
		$unidadasignadacuistodia=$_POST['unidadasignadacuistodia'];
		$unidadasignada=$_POST['unidadasignada'];
		$conductor=$_POST['conductor'];
		$placadetracto=$_POST['placadetracto'];
		$placadecarreta=$_POST['placadecarreta'];
			$numdeguia=$_POST['numdeguia'];
				$nombresolicitante=$_POST['nombresolicitante'];
			$dnisolicitante=$_POST['dnisolicitante'];
		$celularsolicitante=$_POST['celularsolicitante'];
			$correosolicitante=$_POST['correosolicitante'];
				$fecharegistro=$_POST['fecharegistro'];
			
			
			
		
		
		
	$conexion->set_charset('utf8');	


$sqlTabla1="INSERT into cliente2 (dir,anio,mes,fecdeentrega,fecdesalida,fecprogpdi,cliente,ruc,tipo,origen,destino,marca,modelo,color,vin,concesionario,situacion,unidadasignadacuistodia,unidadasignada,conductor,placadetracto,placadecarreta,numdeguia,nombresolicitante,dnisolicitante,celularsolicitante,correosolicitante,fecharegistro)
			values ('$dir','$anio','$mes','$fecdeentrega','$fecdesalida','$fecprogpdi','$cliente','$ruc','$tipo','$origen','$destino','$marca','$modelo','$color','$vin','$concesionario','$situacion','$unidadasignadacuistodia','$unidadasignada','$conductor','$placadetracto','$placadecarreta','$numdeguia','$nombresolicitante','$dnisolicitante','$celularsolicitante','$correosolicitante','$fecharegistro')";

$ejecutado=mysqli_query($conexion,$sqlTabla1);

if($ejecutado==1){
$sqlTabla1="INSERT into carlos_berrocal (dir,anio,mes,fecdeentrega,fecdesalida,fecprogpdi,cliente,ruc,tipo,origen,destino,marca,modelo,color,vin,concesionario,situacion,unidadasignadacuistodia,unidadasignada,conductor,placadetracto,placadecarreta,numdeguia,nombresolicitante,dnisolicitante,celularsolicitante,correosolicitante,fecharegistro)
			values ('$dir','$anio','$mes','$fecdeentrega','$fecdesalida','$fecprogpdi','$cliente','$ruc','$tipo','$origen','$destino','$marca','$modelo','$color','$vin','$concesionario','$situacion','$unidadasignadacuistodia','$unidadasignada','$conductor','$placadetracto','$placadecarreta','$numdeguia','$nombresolicitante','$dnisolicitante','$celularsolicitante','$correosolicitante','$fecharegistro')";
$ejecutado=mysqli_query($conexion,$sqlTabla1);
}

?>
	
	

	
	
	
	
	

	
	
	
	

	
	

 ?>

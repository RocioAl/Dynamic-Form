<html>
<head>
<meta charset="utf-8">
<title>Prueba rapida como generar un documento e imprimir</title>
<style type="text/css">
    body {
        height: 842px;
        width: 595px;
        /* to centre page on screen*/
        margin-left: auto;
        margin-right: auto;
    }
	.center {
  display: block;
  text-align: center;
  margin: 20px auto;
}
</style>
</head>
 
<body>
<?php
if( isset($_POST['generar_contenido']) ){ //Si se pulso el boton 'generar_contenido' ..
if(empty($_POST['dir']) ){ // Si esta vacio el campo 'numero_factura' entonces damos un mensaje de error.
echo "Por favor escriba el dir";
}else{
?>
<center>
<b>Numero de factura:</b> <?php echo htmlentities($_POST['dir']); //Imprimimos el numero de factura generada en el form. ?>
 
<br>
<input type='button' onclick='window.print();' value='Imprimir' />
</center>
<?php
}
}else{
?>
<center>
<?php
include('index.php');

?>




</center>
<?php
} //Fin del codigo
/*
by http://www.guidobatanmaquinarias.com
*/
?>
</body>
</html>
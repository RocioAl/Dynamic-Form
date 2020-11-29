<?php 
header('Content-Type: text/html; charset=UTF-8');
?>
<!doctype html>
<html lang="en">
  <head><meta charset="gb18030">
      
      
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <title></title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
      <style>
          header{
    background: #6cc091;
    background: -webkit-linear-gradient(to right, grey, #6cc091);
    background: linear-gradient(to right, grey, #6cc091);
}

/*estilos para la tabla*/
table th {
    background-color: #6cc091 !important;
    color: white;
}
table>tbody>tr>td {
    vertical-align: middle !important;
}

/*para alinear los botones y cuadro de busqueda*/
.btn-group, .btn-group-vertical {
    position: absolute !important;
}
      </style>
  </head>
    
  <body> 
     <header>
         <h1 class="text-center text-light">HISTORIAL DE REGISTROS</h1>
          <div role="navigation" class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">

  
          <a class="button"href="../index.php">HOME</a>
          
        </div>
        
      </div>
    </div>
     </header>    
    <div style="height:50px"></div>
     
    <!--Ejemplo tabla con DataTables-->
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                         <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                         <thead>
<tr>
<th>Direcci&oacuten </th><th>Fecha de Entrega </th><th>Fecha de Salida</th><th>Ruc </th><th>Marca</th><th>Modelo</th>
<th>Color </th><th>Cliente</th><th>Origen</th><th>Destino </th><th>Vin</th><th>Concesionario</th>
<th>Fecha de Registro</th>

</tr>

</thead>
                        <tbody>
<?php
$hostname="localhost";
$username="pikanvin_user";
$password="275718";
$db = "pikanvin_cliente";
$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
foreach($dbh->query('SELECT dir, fecdeentrega,fecdesalida,ruc,marca,modelo,color,cliente,origen,destino,vin,concesionario,conductor,fecharegistro
 FROM angel_mercado ORDER BY dir,destino;') as $row) {
echo "<tr>"; 
echo "<td>" . $row['dir'] . "</td>";


echo "<td>" . date("d/m/Y", strtotime($row["fecdeentrega"]));
echo "<td>" . date("d/m/Y", strtotime($row["fecdesalida"]));

echo "<td>" . $row['ruc'] . "</td>";
echo "<td>" . $row['marca'] . "</td>";

echo "<td>" . $row['modelo'] . "</td>";
echo "<td>" . $row['color'] . "</td>";
echo "<td>" . $row['cliente'] . "</td>";
echo "<td>" . $row['origen'] . "</td>";
echo "<td>" . $row['destino'] . "</td>";
echo "<td>" . $row['vin'] . "</td>";
echo "<td>" . $row['concesionario'] . "</td>";
echo "<td>" . $row['fecharegistro'] . "</td>";

echo "</tr>"; 
}
?>
</tbody></table>     
                    </div>
                </div>
        </div>  
    </div>    
     
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="main.js"></script>  
    
    
  </body>
</html>

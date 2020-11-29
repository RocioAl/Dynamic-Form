<?php
$mysqli = @new mysqli('localhost', '', '', '');
if ($mysqli->connect_error) {
echo('Error de conexion: ' . $mysqli->connect_error);
}
?>
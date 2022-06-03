<?php 

include("Admin/BDD/Conexion.php");


$sql = "select * from productos;";
$result = $conn->query($sql);

header('content-type:application/vnd.ms-exel;charset=UTF-8');
header('Content-Disposition:attachment;filename=nombre_archivo.xls');
echo "<table border ='1' cellcadding='2' cellspacing='0' whidth='100%'>";

while($row = $result->fetch_assoc()){
$id=$row['id'];
$nombre = $row['nombre'];
$marca = $row['marca'];
$detalle = $row['detalle'];


echo "<tr> <td>Nombre</td> <td>Marca</td><td>Detalle </td></tr>";
echo "<tr><td>$id</td> <td>$nombre</td> <td>$marca</td><td>$detalle </td></tr>";

}



?>
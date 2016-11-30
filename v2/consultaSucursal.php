<?php
header ('Content-type: text/html; charset=utf-8');
include('conx.php');
?>



<?php

/*
$q = "select id, name from college";
$sql = mysql_query($q);
$data = array();
while($row = mysql_fetch_array($sql, true)){
    $data[] = $row; 
};
echo json_encode($data);
*/

if (!$enlace = mysql_connect('',$dbuser,$dbpss)) {
    echo 'No pudo conectarse a mysql';
    exit;
}
if (!mysql_select_db($dbname, $enlace)) {
    echo 'No pudo seleccionar la base de datos';
    exit;
}

if (isset($_POST['prov'])){
	$sql= "SELECT * FROM sucursales GROUP BY provincia";
}
if (isset($_POST['loca'])){
	$sql= "SELECT * FROM sucursales WHERE provincia='".$_POST['prov']."' GROUP BY localidad";
}
if (isset($_POST['dire'])){
	$sql= "SELECT * FROM sucursales WHERE localidad='".$_POST['loca']."' ";
}

$resultado = mysql_query($sql, $enlace);

if (!$resultado) {
    echo "Error de BD, no se pudo consultar la base de datos";
    echo "Error MySQL: " . mysql_error();
    exit;
}

//var_dump($resultado);
//print_r($resultado);
$count=0;
while ($fila = mysql_fetch_array($resultado, true)) {

    //$fila = ucwords($fila);

    $data[]=array_map('utf8_encode',  $fila);
    //$data[] = $fila; 
    $count++;

}

echo json_encode($data);


mysql_free_result($resultado);
//var_dump($fila);

?>



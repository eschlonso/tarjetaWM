<?php



 include("conx.php");


header("Content-type: application/vnd.ms-excel" ) ;
header("Content-Disposition: attachment; filename=archivo.xls" ) ;
//en la sigte linea colocar entre comillas el nombre del servidor mysql (generalmente, localhost)
$servidor="";
//en la sigte linea colocar entre comillas el nombre de usuario
$user=$dbuser;
//en la sigte linea colocar entre comillas la contraseña
$pass=$dbpss;
//en la sigte linea colocar entre comillas e nombre de la base de datos
$db=$dbname;
//en la sigte linea colocar entre comillas e nombre de la tabla
$tabla="formulario1";
mysql_connect($servidor,$user,$pass) ;
mysql_select_db($db) ;





$qry=mysql_query("select * from $tabla" ) ;
$campos = mysql_num_fields($qry) ;
$i=0;
echo "<table><tr>";
while($i<$campos){
echo "<td>". mysql_field_name ($qry, $i) ;
echo "</td>";
$i++;
}
echo "</tr>";
while($row=mysql_fetch_array($qry)){
echo "<tr>";
for($j=0; $j<$campos; $j++) {
echo "<td>".$row[$j]."</td>";
}
echo "</tr>";
}
echo "</table>";
?>

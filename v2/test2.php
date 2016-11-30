 <?php

 //error_reporting(0);

 date_default_timezone_set('America/Argentina/Buenos_Aires');


 include("conx.php");



$servername = '';
$username = $dbuser;
$password = $dbpss;
$dbname = $dbname;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


/*
$nombre=utf8_decode($_POST['name']);
$apellido=utf8_decode($_POST['lastName']);


$dni=$_POST['documentIdentifier'];
$tipo_dni=$_POST['documentType'];
$fecha_nacimiento=$_POST['fecha_nac'];
$sexo=$_POST['gender'];
$situacion_laboral=utf8_decode($_POST['condlaboral']);
$ingreso_mensual=utf8_decode($_POST['aproxsalary']);
$antlaboral=utf8_decode($_POST['antlaboral']);

$perfil_crediticio=utf8_decode($_POST['perfilcrediticio']);
$email=$_POST['email'];
$celular=$_POST['mobilePhone'];
$telefono_fijo=$_POST['phone'];
$provincia=utf8_decode($_POST['prov']);
$recibir_promo_ofertas=$_POST['newsletter'];
$sucursal=utf8_decode($_POST['sucursal']);



$codigo_postal="777777";
$hoy="2017-01-01";//date("Y-m-d");  
*/


$nombre="sadasdsda";
$apellido="sadasdsda";


$dni="sadasdsda";
$tipo_dni="sadasdsda";
$fecha_nacimiento="sadasdsda";
$sexo="sadasdsda";
$situacion_laboral="sadasdsda";
$ingreso_mensual="sadasdsda";
$antlaboral="sadasdsda";

$perfil_crediticio="sadasdsda";
$email="sadasdsda";
$celular="sadasdsda";
$telefono_fijo="sadasdsda";
$provincia="sadasdsda";
$recibir_promo_ofertas="sadasdsda";
$sucursal="sadasdsda";




/*
$nombre="asdsadsadsad";
$apellido="asdsadsadsad";


$dni="asdsadsadsad";
$tipo_dni="asdsadsadsad";
$fecha_nacimiento="asdsadsadsad";
$sexo="asdsadsadsad";
$situacion_laboral="asdsadsadsad";
$ingreso_mensual="asdsadsadsad";
$perfil_crediticio="asdsadsadsad";
$email="asdsadsadsad";
$celular="asdsadsadsad";
$telefono_fijo="asdsadsadsad";
$provincia="asdsadsadsad";
$recibir_promo_ofertas="asdsadsadsad";
*/


/*
$sql = "INSERT INTO formulario1 (tipo_dni,dni,nombre,apellido,fecha_nacimiento,sexo,situacion_laboral,antlaboral,ingreso_mensuales,perfil_crediticio,email,celular,telefono_fijo,provincia,recibir_promo_ofertas,sucursal)
VALUES ('".$tipo_dni."','".$dni."','".$nombre."','".$apellido."','".$fecha_nacimiento."','".$sexo."','".$situacion_laboral."','".$antlaboral."','".$ingreso_mensual."','".$perfil_crediticio."','".$email."','".$celular."','".$telefono_fijo."','".$provincia."','".$recibir_promo_ofertas."','".$sucursal."')";
*/


$sql = "INSERT INTO formulario1 (tipo_dni,dni,nombre,apellido,fecha_nacimiento,sexo,situacion_laboral,antlaboral,ingreso_mensuales,perfil_crediticio,email,telalternativo,telefono_fijo,provincia,recibir_promo_ofertas,sucursal,fecha_alta,producto,subproducto,empresa,promocion,canal,tramiteproceid,postalcodi,clipropiedadtipoid,monto,cliivaid)
VALUES ('".$tipo_dni."','".$dni."','".$nombre."','".$apellido."','".$fecha_nacimiento."','".$sexo."','".$situacion_laboral."','".$antlaboral."','".$ingreso_mensual."','".$perfil_crediticio."','".$email."','".$celular."','".$telefono_fijo."','".$provincia."','".$recibir_promo_ofertas."','".$sucursal."','2017-01-01','110','89','81','1','1','1','656576','1','7000','4')";

//,producto,subproducto,empresa,promocion,canal,tramiteproceid,postalcodi,clipropiedadtipoid,monto,cliivaid

//,'110','89','81','1','1','1','656576','1','7000','4'



//,'110','89','81','1','1','1','656576','1','7000','4'

//fecha_alta,producto,subproducto,empresa,promocion,canal,tramiteproceid,postalcodi,clipropiedadtipoid,monto,cliivaid

//echo $sql;



if (mysqli_query($conn, $sql)) {
    echo "1"; //alert('success');//testing purposes
} else {
    echo "0"; //mysqli_error($conn);
}

mysqli_close($conn);



?> 



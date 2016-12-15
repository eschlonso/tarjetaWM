 <?php

//error_reporting(0);

date_default_timezone_set('America/Argentina/Buenos_Aires');

include "conx.php";

$servername = '';
$username   = $dbuser;
$password   = $dbpss;
$dbname     = $dbname;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$nombre   = utf8_decode($_POST['name']);
$apellido = utf8_decode($_POST['lastName']);

$dni               = $_POST['documentIdentifier'];
$tipo_dni          = $_POST['documentType'];
$fecha_nacimiento  = $_POST['fecha_nac'];
$sexo              = $_POST['gender'];
$situacion_laboral = utf8_decode($_POST['condlaboral']);
$ingreso_mensual   = utf8_decode($_POST['aproxsalary']);
$antlaboral        = utf8_decode($_POST['antlaboral']);

$perfil_crediticio     = utf8_decode($_POST['perfilcrediticio']);
$email                 = $_POST['email'];
$celular               = $_POST['phone'];
$telefono_fijo         = $_POST['mobilePhone'];
$provincia             = utf8_decode($_POST['prov']);
$recibir_promo_ofertas = $_POST['newsletter'];
$sucursal              = utf8_decode($_POST['sucursal']);

$codigoPostal = $_POST['codigoPostal']; //$_POST['codigoPostal'];
$hoy          = date("Y-m-d H:i:s"); //"2017-01-01";
/*

//utf8_decode
$nombre=$_POST['name'];
$apellido=$_POST['lastName'];

$dni=$_POST['documentIdentifier'];
$tipo_dni=$_POST['documentType'];
$fecha_nacimiento=$_POST['fecha_nac'];
$sexo=$_POST['gender'];
$situacion_laboral=$_POST['condlaboral'];
$ingreso_mensual=$_POST['aproxsalary'];
$antlaboral=$_POST['antlaboral'];

$perfil_crediticio=$_POST['perfilcrediticio'];
$email=$_POST['email'];
$celular=$_POST['mobilePhone'];
$telefono_fijo=$_POST['phone'];
$provincia=$_POST['prov'];
$recibir_promo_ofertas=$_POST['newsletter'];
$sucursal=$_POST['sucursal'];

 */

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
$sql = "INSERT INTO formulario2 (tipo_dni,dni,nombre,apellido,fecha_nacimiento,sexo,situacion_laboral,antlaboral,ingreso_mensuales,perfil_crediticio,email,celular,telefono_fijo,provincia,recibir_promo_ofertas,sucursal)
VALUES ('".$tipo_dni."','".$dni."','".$nombre."','".$apellido."','".$fecha_nacimiento."','".$sexo."','".$situacion_laboral."','".$antlaboral."','".$ingreso_mensual."','".$perfil_crediticio."','".$email."','".$celular."','".$telefono_fijo."','".$provincia."','".$recibir_promo_ofertas."','".$sucursal."')";
 */

$sql = "INSERT INTO formulario2 (tipo_dni,dni,nombre,apellido,fecha_nacimiento,sexo,ingreso_mensuales,email,telalternativo,telefono_fijo,recibir_promo_ofertas,sucursal,fecha_alta,producto,subproducto,empresa,promocion,canal,tramiteproceid,postalcodi,clipropiedadtipoid,monto,cliivaid)
VALUES ('" . $tipo_dni . "','" . $dni . "','" . $nombre . "','" . $apellido . "','" . $fecha_nacimiento . "','" . $sexo . "','" . $ingreso_mensual . "','" . $email . "','" . $celular . "','" . $telefono_fijo . "','" . $recibir_promo_ofertas . "','" . $sucursal . "','" . $hoy . "','110','89','81','1','1','1','" . $codigoPostal . "','1','7000','4')";

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
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



$nombre=$_POST['name'];
$apellido=$_POST['lastName'];


$dni=$_POST['documentIdentifier'];
$tipo_dni=$_POST['documentType'];
$fecha_nacimiento=$_POST['fecha_nac'];
$sexo=$_POST['gender'];
$situacion_laboral=$_POST['condlaboral'];
$ingreso_mensual=$_POST['aproxsalary'];
$perfil_crediticio=$_POST['perfilcrediticio'];
$email=$_POST['email'];
$celular=$_POST['mobilePhone'];
$telefono_fijo=$_POST['phone'];
$provincia=$_POST['prov'];
$recibir_promo_ofertas=$_POST['newsletter'];





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



$sql = "INSERT INTO formulario1 (tipo_dni,dni,nombre,apellido,fecha_nacimiento,sexo,situacion_laboral,ingreso_mensuales,perfil_crediticio,email,celular,telefono_fijo,provincia,recibir_promo_ofertas)
VALUES ('".$tipo_dni."','".$dni."','".$nombre."','".$apellido."','".$fecha_nacimiento."','".$sexo."','".$situacion_laboral."','".$ingreso_mensual."','".$perfil_crediticio."','".$email."','".$celular."','".$telefono_fijo."','".$provincia."','".$recibir_promo_ofertas."')";



//echo $sql;



if (mysqli_query($conn, $sql)) {
    echo "1"; //alert('success');//testing purposes
} else {
    echo "0"; //mysqli_error($conn);
}

mysqli_close($conn);



?> 



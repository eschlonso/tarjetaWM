var pathname     = window.location.pathname;
var registerForm = $('#registerForm');

registerForm.parsley();

window.Parsley
    .addValidator('documentnumber', {
        requirementType: 'integer',
        validateNumber: function(value, requirement) {
            return validateDocument(value.toString());
        },
        messages: {
            es: 'Por favor, ingresá un número de cédula válido.'
        }
    });



$(document).ready(function() {

    $('#SolicitarPrestamo').on('click', function () {
        registerForm.parsley().validate();
        if (true === registerForm.parsley().isValid()) {
            $(this).button('loading');
        }
    });

    $("#condlaboral").on("change", function() {
        var v = $("#condlaboral").val();
        if(v == "Empleado publico" || v == "Empleado privado" || v =="Fuerzas Armadas / Fuerzas de Seguridad" || v == "Autonomo" || v == "Monotributo"){
            $("#antlaboral-group").removeClass("hidden");
            $("#antlaboral").attr("data-parsley-required","true");
        } else {
            $("#antlaboral-group").addClass("hidden");
            $("#antlaboral").attr("data-parsley-required","false");
        }
    });

    //API-LEADSPANEL

    api_settings.success = function(data) {

//alert('exito');

//alert('lalalalalal 54');
//$("#boton3").attr("disabled","disabled");

nombre=$("#name").val();
apellido=$("#lastName").val();
dni=$("#documentIdentifier").val();
tipo_dni=$("#documentType").val();
fecha_nacimiento=$("#year").val()+'-'+$("#month").val()+'-'+$("#day").val()
sexo=$("#gender").val();
situacion_laboral=$("#condlaboral").val();
ingreso_mensual=$("#aproxsalary").val();
perfil_crediticio=$("#perfilcrediticio").val();
email=$("#email").val();
celular='('+$("#mobilePhoneCode").val()+') '+$("#mobilePhone").val();
telefono_fijo=$("#phonecode").val()+$("#phone").val();
//provincia= $("#prov").html();
provincia=$('#prov :selected').attr('label');
codigo_postal=$("#codigoPostal").val();

//recibir_promo_ofertas=$("#newsletter").val();
if ($('#newsletter:checked').val() !== undefined)
{
    //Checked
    recibir_promo_ofertas="Si";
}else{
    recibir_promo_ofertas="No";
    //Not checked
}

//alert("sucursal "+$("#sucursal").val());
/*
if(document.getElementById("sucursal") !== null)
{*/
    //sucursal=$("#sucursal").val();
    //sucursal=$('#sucursal :selected').html();
sucursal=$('#a3_title').val();
    /*
    //alert("tiene sucursal"+sucursal);
}else{
    //alert('no tiene sucursal');
    sucursal=" ";
}
*/
//alert("condlaboral "+$("#condlaboral").val());

if($("#condlaboral").val() == "Jubilado" || $("#condlaboral").val() == "Desocupado" || $("#condlaboral").val() == "Otros" )
{
    antlaboral="";
    //alert('no tiene antlaboral');
    
}else{
//alert("tiene antlaboral"+antlaboral);
    
    antlaboral=$("#antlaboral").val();
}


//alert(nombre+apellido);
//console.log(nombre+apellido+dni+tipo_dni+fecha_nacimiento+sexo+situacion_laboral+ingreso_mensual+perfil_crediticio+email+celular+telefono_fijo+provincia+recibir_promo_ofertas);



//console.log('name='+nombre+'&lastName='+apellido+'&documentIdentifier='+dni+'&documentType='+tipo_dni+'&fecha_nac='+fecha_nacimiento+'&gender='+sexo+'&condlaboral='+situacion_laboral+'&aproxsalary='+ingreso_mensual+'&perfilcrediticio='+perfil_crediticio+'&email='+email+'&mobilePhone='+celular+'&phone='+telefono_fijo+'&perfilcrediticio='+perfil_crediticio+'&email='+email+'&mobilePhoneCode='+celular+'&phone='+telefono_fijo+'&prov='+provincia+'&newsletter='+recibir_promo_ofertas);

$.ajax({
  type: "POST",
  url: "insertar.php",
  data: 'name='+nombre+'&lastName='+apellido+'&documentIdentifier='+dni+'&documentType='+tipo_dni+'&fecha_nac='+fecha_nacimiento+'&gender='+sexo+'&condlaboral='+situacion_laboral+'&antlaboral='+antlaboral+'&aproxsalary='+ingreso_mensual+'&perfilcrediticio='+perfil_crediticio+'&phone='+telefono_fijo+'&perfilcrediticio='+perfil_crediticio+'&email='+email+'&mobilePhone='+celular+'&prov='+provincia+'&newsletter='+recibir_promo_ofertas+'&sucursal='+sucursal+'&codigoPostal='+codigo_postal,
  datatype: "html",
  success: function(result){
console.log(result);
       if(result == 1)
        {
            //alert('result'+result);
            //$('#exito').show();
            $('#exito').html("<p>Sus datos fueron enviados correctamente,<br> nos comunicaremos con ustedes a la brevedad.<br> <a href='' name='result'>Volver</a> </p>");
             $("#exito").show();




             


$('#h1-container').hide();

$('#form-container').hide();


//alert('success');//testing purposes

 // window.location.hash = "exito";  



  $("html, body").animate({ scrollTop: $("#exito").offset().top }, 500);

      }
        else if(result == 0)
        {
            //$('#pantalla4').html(  'ERROR NO SE PUDO CARGAR');
            alert('Error no se pudo cargar.');//testing purposes
        }


           /*
    $("#pantalla1").hide();
    $("#pantalla2").hide();
    $("#pantalla3").hide();
    $("#pantalla4").show();
*/
    




      }
  })













/*

        if(data.result.leadsInLastMonth){
            var arr_date_reg = data.result.leadsInLastMonthDate.split(" ");
            var date_reg = arr_date_reg[0];
            if(data.result.leadsInLastMonthStatus == 'OK' ||
                data.result.leadsInLastMonthStatus == 'PENDIENTE'){
                window.location = '../30dias.php?d=' + date_reg + '&s=proceso' ;
                return;
            }else if(data.result.leadsInLastMonthStatus == 'INGRESADO'){
                window.location = '../30dias.php?d=' + date_reg + '&s=ingresado' ;
                return;
            }else{
                window.location = '../30dias.php?d=' + date_reg;
                return;
            }

        }
        if (data.result.status == 'RECHAZADO'){
            window.location = 'confirmacion.php?status=no-aprobada';
            return;
        }else{
            window.location = "confirmacion.php";
            return;
        }





*/


    };

    //Para el caso en que haga back con el browser después de envíar el formulario.
    $('#SolicitarPrestamo').removeAttr('disabled');

    $('#registerForm').leadsApi(api_settings);

}); // End - Document Ready

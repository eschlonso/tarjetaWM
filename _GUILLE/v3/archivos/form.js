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
        if(v == "10" || v == "11" || v =="12" || v == "8" || v == "9"){
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
celular=$("#mobilePhoneCode").val()+$("#mobilePhone").val();
telefono_fijo=$("#phone").val();
provincia=$("#prov").val();
recibir_promo_ofertas=$("#newsletter").val();

//alert(nombre+apellido);
//console.log(nombre+apellido+dni+tipo_dni+fecha_nacimiento+sexo+situacion_laboral+ingreso_mensual+perfil_crediticio+email+celular+telefono_fijo+provincia+recibir_promo_ofertas);



//console.log('name='+nombre+'&lastName='+apellido+'&documentIdentifier='+dni+'&documentType='+tipo_dni+'&fecha_nac='+fecha_nacimiento+'&gender='+sexo+'&condlaboral='+situacion_laboral+'&aproxsalary='+ingreso_mensual+'&perfilcrediticio='+perfil_crediticio+'&email='+email+'&mobilePhone='+celular+'&phone='+telefono_fijo+'&perfilcrediticio='+perfil_crediticio+'&email='+email+'&mobilePhoneCode='+celular+'&phone='+telefono_fijo+'&prov='+provincia+'&newsletter='+recibir_promo_ofertas);

$.ajax({
  type: "POST",
  url: "insertar.php",
  data: 'name='+nombre+'&lastName='+apellido+'&documentIdentifier='+dni+'&documentType='+tipo_dni+'&fecha_nac='+fecha_nacimiento+'&gender='+sexo+'&condlaboral='+situacion_laboral+'&aproxsalary='+ingreso_mensual+'&perfilcrediticio='+perfil_crediticio+'&phone='+telefono_fijo+'&perfilcrediticio='+perfil_crediticio+'&email='+email+'&mobilePhone='+celular+'&prov='+provincia+'&newsletter='+recibir_promo_ofertas,
  datatype: "html",
  success: function(result){
//console.log(result);
       if(result == 1)
        {
            //$('#exito').show();

             $("#exito").show();




             


$('#h1-container').hide();

$('#form-container').hide();


//alert('success');//testing purposes

  window.location.hash = "exito";  

      }
        else if(result == 0)
        {
            //$('#pantalla4').html(  'ERROR NO SE PUDO CARGAR');
            alert('error no se pudo cargar');//testing purposes
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

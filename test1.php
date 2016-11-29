<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<script src="archivos/jquery.min.js" type="text/javascript"></script>
<title>Insert title here</title>

<script>
  
function selector1(){


        var items="";



$.ajax({
  method: "POST",
  url: "consultaSucursal.php",
  data: {prov:0}
})
.done(function( msg ) {
  alert( "Data Saved: " + msg );

  var obj = jQuery.parseJSON( msg );
  //alert( "Data Saved: " +obj[0].id );


  for (i = 0; i < obj.length; i++) {
  items+="<option value='"+obj[i].provincia+"' >"+obj[i].provincia+"</option>";
  }

  $("#a1_title").html(items); 
  $("#a1_title").prepend("<option disabled='true' label='Seleccionar' selected='true'>Seleccionar</option>");


});



}

function selector2(){

//alert('tocaste aqui');
$('#a2_title').hide();
$('#a3_title').hide();


  NONO=$("#a1_title").val();
 // alert(NONO);
        var items="";
     



$.ajax({
  method: "POST",
  url: "consultaSucursal.php",
  data: {prov:NONO,loca:0}
})
.done(function( msg ) {
  //alert( "Data Saved: " + msg );

  var obj = jQuery.parseJSON( msg );
  //alert( "Data Saved: " +obj[0].id );


  for (i = 0; i < obj.length; i++) {
  items+="<option value='"+obj[i].localidad+"' >"+obj[i].localidad+"</option>";
  }

  $("#a2_title").html(items); 
  $("#a2_title").prepend("<option disabled='true' label='Seleccionar' selected='true'>Seleccionar</option>");


});




}


function selector3(){

  NONO=$("#a1_title").val();
  NANA=$("#a2_title").val();

  //alert('hola'+NANA+NONO);
        var items="";






$.ajax({
  method: "POST",
  url: "consultaSucursal.php",
  data: {dire:0,loca:NANA,prov:NONO}
})
.done(function( msg ) {
  alert( "Data Saved: " + msg );

  var obj = jQuery.parseJSON( msg );
  //alert( "Data Saved: " +obj[0].id );


  for (i = 0; i < obj.length; i++) {
  items+="<option value='"+obj[i].sucursal+"' >"+obj[i].direccion+"</option>";
  }

  $("#a3_title").html(items); 
  $("#a3_title").prepend("<option disabled='true' label='Seleccionar' selected='true'>Seleccionar</option>");


});


/*

*/
 
}


</script>
</head>
<body>



<br>
provincia<br>
<select id="a1_title">
  <option>Default</option>
</select>
<br>
localidad<br>
<select id="a2_title">
  <option>Default</option>
</select><br>

direccion es sucursal.<br>
<select id="a3_title">
  <option>Default</option>
</select><br>



<script type="text/javascript">




$(function(){
selector1();

    });
</script>

<script>
  
$('#a2_title').hide();
$('#a3_title').hide();

  $('#a1_title').on('change', function(){

  

selector2();


 $("#a2_title").show();



});



  $('#a2_title').on('change', function(){

  

selector3();
 $("#a3_title").show();



});



</script>
</body>
</html>
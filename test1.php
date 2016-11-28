<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<script src="archivos/jquery.min.js" type="text/javascript"></script>
<title>Insert title here</title>

<script>
  
function selector1(){


        var items="";
      $.getJSON("consultaSucursal.php?prov=0",function(data){
        $.each(data,function(index,item) 
        {
          items+="<option value='"+item.provincia+"'>"+item.provincia+"</option>";
        });
        $("#a1_title").html(items); 
      });

}

function selector2(){

//alert('tocaste aqui');
$('#a2_title').hide();
$('#a3_title').hide();


  NONO=$("#a1_title").val();
 // alert(NONO);
        var items="";
      $.getJSON("consultaSucursal.php?loca=0&prov="+NONO,function(data){
        $.each(data,function(index,item) 
        {
          items+="<option value='"+item.localidad+"'>"+item.localidad+"</option>";
        });
        $("#a2_title").html(items); 
      });

}


function selector3(){

  NONO=$("#a1_title").val();
  NANA=$("#a2_title").val();

  //alert('hola'+NANA+NONO);
        var items="";
      $.getJSON("consultaSucursal.php?dire=0&loca="+NANA+"&prov="+NONO,function(data){
        $.each(data,function(index,item) 
        {
          items+="<option value='"+item.id+"'>"+item.direccion+"</option>";
        });
        $("#a3_title").html(items); 
      });

 
}


</script>
</head>
<body>
<script type="text/javascript">




$(function(){
selector1();
    });
</script>


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
<!--Se carga http://code.jquery.com/ una version de jquery del servidor mas proximo a mi IP -->
<script
			  src="http://code.jquery.com/jquery-3.1.1.min.js"
			  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			  crossorigin="anonymous"></script>
<select id="misarchivos">
	<?php
		$archivos = scandir("/home/asus/Escritorio/www/pdf"); //Se carga la ruta del enlace simbolico
		foreach ($archivos as $archivo) {
		   echo "<option value='".$archivo."'>".$archivo. "</option>"; //Concatenamos archivos con ".$archvivo."
			}
	?>
</select>

<!--Se cargan mis archivos en la variable pdf, se añade el archivo actual al html con el atributo data en el visor-->
<script>
$(function(){
  $("#misarchivos").on("change",function(){
    var pdf = $("#misarchivos").val();
    $("#archivoactual").html(pdf);
    $("#visor").attr("data","http://localhost/pruebapdf/documentos/"+pdf);
  });
});
</script>
<p> Archivo actual </p>
<center><object style="width:1100px;height:600px" id="visor" data=""></object></center> <!--Se sirven los pdf embebidos -->
<p id="archivoactual"></p> <!--Carga archivo actual al id de la  -->
<div align="center"><img src="logo.jpg"></div>

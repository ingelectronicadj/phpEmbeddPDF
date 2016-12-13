<!doctype html>
<html>
<head>
	<title>Biblioteca ILSA - Busqueda</title>
	<!--Se carga http://code.jquery.com/ una version de jquery del servidor mas proximo a mi IP -->
	<script
	  src="http://code.jquery.com/jquery-3.1.1.min.js"
	  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	  crossorigin="anonymous">
	</script>

			<select id="misarchivos">
				<?php
					$archivos = scandir("/home/asus/Escritorio/www/pdf"); //Se carga la ruta del enlace simbolico
					foreach ($archivos as $archivo) {
					   echo "<option value='".$archivo."'>".$archivo. "</option>"; //Concatenamos archivos con ".$archvivo."
						}
				?>
			</select>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--Se cargan mis archivos en la variable pdf, se añade el archivo actual al html con el atributo data en el visor-->
			<script>
			$(function(){
			  $("#misarchivos").on("change",function(){
			    var pdf = $("#misarchivos").val();
			    $("#archivoactual").html(pdf);
			    $("#visor").attr("data","http://localhost/pruebapdf/documentos/"+pdf);
			  });
				var availableTags = [
					"camello_$$$",
					"001-5398-series",
					"Leo Leonel",
					"Diego Javier Mena",
					"ActionScript",
					"AppleScript",
					"Asp",
					"BASIC",
					"C",
					"C++",
					"Clojure",
					"COBOL",
					"ColdFusion",
					"Erlang",
					"Fortran",
					"Groovy",
					"Haskell",
					"Java",
					"JavaScript",
					"Lisp",
					"Perl",
					"PHP",
					"Python",
					"Ruby",
					"Scala",
					"Scheme"
				];
				$( "#tags" ).autocomplete({
					source: availableTags
				});
			});
			</script>
</head>

<body>
	<div class="ui-widget">
	  <label for="tags">Busqueda:</label>
	  <input id="tags">
	</div>

	<div align="center">
		<p id="archivoactual">Archivo actual</p> <!--Carga archivo actual al id de la  -->
		<center><object style="width:1100px;height:600px" id="visor" data=""></object></center> <!--Se sirven los pdf embebidos -->
		<img src="logo.jpg">
	</div>

</body>
</html>


<?php
	
	require 'funciones.php';

	date_default_timezone_set("America/Bogota");
	$dato = $_POST;

	$respuesta = registrarEntrada($dato["codigo"],date("y-m-d h:i:s"));


?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Registro de Asistencia</title>
		<style>
			body{
				margin: 0;
				padding: 0;
				background: black;
			}

			#usuario{
				width: 300px;
				margin:50 auto;
				border: 1px solid #59df7a;
				text-align: center;
				color: white;

			}

		</style>
	</head>

	<body>	

		<div id="usuario">
			<p>
		        <?php if(!is_null($respuesta)){
		        		echo "ENTRADA REGISTRADA"."</br>"
		        			.$respuesta["cod_usuario"]." ".$respuesta["nombre"]." ".$respuesta["cargo"];
		        		}else echo "Usuario no registrado";
		        ?>
	        </p>       

			<a href="index.html">Inicio</a>			


		</div>	

		
	</body>



</html>
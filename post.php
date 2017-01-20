
<?php

	$dato = $_POST;


?>



<html>
	<head>
		<meta charset="UTF-8">
		<title>Document</title>

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

			<p><?php echo $dato["codigo"] ?></p>
			</br>
			</br>
			<a href="index.html">Inicio</a>			


		</div>
		

		
	</body>



</html>
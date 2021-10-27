<?php


		$destino = 'erod1697@gmail.com';


		$nombre = $_POST['nombre'];
		$asunto = $_POST['asunto'];
		$correo = $_POST['correo'];
		$telefono = $_POST['telefono'];
		$mensaje = $_POST['mensaje'];


		$header = "Enviado desde Instaladores de calderas";
		$mensajeCompleto = $mensaje . "\nAtentamente:" . $nombre . $telefono . $correo  ;

		mail($destino, $asunto, $mensajeCompleto, $header);
		echo "<script>alert('correo enviado exitosamente') </script>";
		echo "<script> setTimeout(\"location.href='index.html'\",1000) </script>";


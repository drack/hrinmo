<?php
// Guardar los datos recibidos en variables:
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
// Definir el correo de destino:
$dest = "info@hrinmo.com"; 
//$dest = "drack4anubis@gmail.com"; 
 
// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
$headers = "From: $nombre $email\r\n";
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Aqui definimos el asunto y armamos el cuerpo del mensaje
$asunto = "Hrinmo: Formulario de Contacto";
$cuerpo = "

<html>
	<body>
		<table width='600' align='center'>
			<tr>
				<td colspan='3'><font family='arial' color='#333' size='3'><strong>
								<img src='http://hrinmo.com/images/logo.jpg' alt='Hrinmo Estudio de Interiorismo & Inmobiliaria'>
								</strong></font>
								<font family='arial' color='#333'>
				</td>
			</tr>
			<tr><td width='65'></td>
				<td width='60'><strong>Nombre</strong></td>
				<td>".$nombre."</td>
			</tr>
			<tr><td width='65'></td>
				<td width='60'><strong>Email</strong></td>
				<td>".$email."</td>
			</tr>
			<tr><td width='65'></td>
				<td width='60'><strong>Tel&eacute;fono</strong></td>
				<td>".$telefono."</td>
			</tr>
			<tr><td width='65'></td>
				<td width='60'	><strong>Mensaje</strong></td>
				<td>".$mensaje."</font></td>
			</tr>
		</table>
	</body>
</html>"; 
// Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:
if($nombre != '' && $email != '' && $telefono != '' && $mensaje != ''){
    mail($dest,$asunto,$cuerpo,$headers); //ENVIAR!
}
?>
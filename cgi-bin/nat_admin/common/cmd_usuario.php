<?
if($_POST[Submit] == "Enviar"){
	$clave = encrip($_POST["pwd"]);
	
	$va['usu'] .= 'La contraseņa es:  '. $clave;
}

require($cfg['path_templates'] . 'usuario.html');
?>

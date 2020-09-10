<?php
	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__file__) . '/log_error_php.txt');	
	error_reporting(E_ALL);?>
<!DOCTYPE HTML>
<html> 
	<head> 
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/> 
		<title>Démo téléversement</title> 
	</head> 
	<body> 
		
		<br/><br/>
		Merci pour le fichier !
		
		<pre>
			<?php print_r($_FILES);?>		
		</pre>
		
		<?php 
		
		$uploaddir = $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/fichier_upload/';
		$uploadfile = $uploaddir . basename($_FILES['demo']['name']);
		move_uploaded_file($_FILES['demo']['tmp_name'], $uploadfile);
		
		?>
		
	</body> 
</html>
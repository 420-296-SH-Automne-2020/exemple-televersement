<!DOCTYPE HTML>
<html> 
	<head> 
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/> 
		<title>Démo téléversement</title>				
	</head> 
	<body> 
		
		<br/><br/>
		<h1>Version HTML classique</h1>
		<form enctype="multipart/form-data" action="confirmation.php" method="post">
			<input type="hidden" name="MAX_FILE_SIZE" value="1048576"  /> <!-- 1Mo -->			
			Veuillez choisir un fichier à envoyer : <input name="demo" type="file" />
		
			<br/><br/>
			
			<input type="submit" value="Envoyer le fichier" />
		</form>
		
		<br/><br/><br/><br/><br/><br/>
		
		<style>
			#upload input[type=file]{			
				width: 0;
				height: 0;
				opacity: 0;
			} 
		
			#upload #fakeForm button{
				border: 1px solid #000;
				background: #FFF;
				height: 20px;
				border-radius: 0 10px 10px 0;
				box-shadow: 2px 0 5px #000;
			}

			#upload #fakeForm button:hover, #upload #fakeForm button:focus{
				border: 1px solid #999;
				background: #000;
				color: #FFF;
			}
		</style>
		
		
		<h1>Version HTML personnalisée</h1>
		<form id="upload" enctype="multipart/form-data" action="confirmation.php" method="post">
			<input type="hidden" name="MAX_FILE_SIZE" value="1048576"  /> <!-- 1Mo -->
		
			<!-- Invisible par le CSS, mais ne pas utiliser visible:none, car cela le désactive -->
			<input type="file" name="demo" onChange="fakeFile.value=this.value"/>
			<div id="fakeForm">
				<input type="text" name="fakeFile" onClick="demo.click()"/>
				<button type="button" onClick="demo.click()">Choisir...</button>
			</div>
			
			<br/><br/>
			
			<input type="submit" value="Envoyer le fichier" />
		</form> 
		
		
	</body> 
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Meu site</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/css.css"/>
</head>
<body>
	<div>
	<?php
		include_once("topo.php");
		include_once("menu.php");
		
		
		if(empty($_SERVER["QUERY_STRING"])){
			$var="conteudo.php";
			include_once("$var");
		}
		else{
			$pg=$_GET["pg"];
			include_once("$pg.php");
		}
		include_once("rodape.php");

	?>
	</div>	
</body>
</html>
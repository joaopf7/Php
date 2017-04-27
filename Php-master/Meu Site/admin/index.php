<?php
//include_once (config.inc.php);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Meu site">
    <meta name="author" content="JP">
	<title>MeuSite.com - Admin</title>
	 <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<div class="col-lg-12">
			<h1 class="page-header"> Painel Admin</h1>
			<nav>
				<ol class="breadcrumb">
					<li><a href="../index.php">Ir para Site</a></li>
					<li><a href="index.php">Home</a></li>
					<li><a href="?pg=listar">Listar</a></li>
					<li><a href="?pg=inserir">Inserir</a></li>
				</ol>
			</nav>
		</div>
	
	<div>
		<?php
		
		
		
		if(empty($_SERVER["QUERY_STRING"])){
			$var="home.php";
			include_once("$var");
		}
		else{
			$pg=$_GET["pg"];
			include_once("$pg.php");
		}
		

	?>
	</div>
	<div>
	<?php include "../rodape.php"; ?>
	</div>
</div>
</body>
</html>
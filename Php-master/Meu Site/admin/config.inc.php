<?php
	$titulo=$_POST["titulo"];
	$subtitulo=$_POST["subtitulo"];
	$texto=$_POST["texto"];
	$conexao=mysqli_connect("localhost","root","");

	$db=mysqli_select_db($conexao,"meusite");
	
	if($db){
		
	}
	else{
		echo"Erro ao selecionar banco";	
	}
	//Retirar o coment�rio caso esteja executando pela primeira vez no banco caso contr�rio n�o pois a tabela j� existe
	$query=mysqli_query($conexao,"
			CREATE TABLE admin
			(
				id INT PRIMARY KEY AUTO_INCREMENT,
				titulo VARCHAR(100),
				subtitulo VARCHAR(200),
				texto VARCHAR(50)

			)"
		);


		
	
	
		
				
		$queryInserir=mysqli_query($conexao,"
			INSERT INTO admin(titulo,subtitulo,texto)values('$titulo', '$subtitulo','$texto')"
		);
		
		if($queryInserir){
			echo"Mensagem enviada";
		}
		else{
			echo"Mensagem n�o enviada";
		}
	
		
	
	if($query){
		
	}
	else{
		
	}
	
	
	
	
?>
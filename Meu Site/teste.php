<?php
	$conexao=mysqli_connect("localhost","root","");
	if($conexao){
		echo"Conexão estabelecida";
	}
	else{
		echo"Erro ao estabelecer conexão";
	}

?>
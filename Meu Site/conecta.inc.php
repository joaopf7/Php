<?php
//conectando ao servidor
	$nome=$_POST["nome"];
	$email=$_POST["email"];
	$telefone=$_POST["tele"];
	$assunto=$_POST["assunto"];
	$mensagem=$_POST["mensagem"];

	$conexao=mysqli_connect("localhost","root","");
	if($conexao){
		echo"Conexão estabelecida";
	}
	else{
		echo"Erro ao estabelecer conexão";
	}
//conectando ao BD criado
	$db=mysqli_select_db($conexao,"meusite");
	
	if($db){
		echo"Banco selecionado";
	}
	else{
		echo"Erro ao selecionar banco";	
	}
	//Retirar o comentário caso esteja executando pela primeira vez no banco caso contrário não pois a tabela já existe
	$query=mysqli_query($conexao,"
			CREATE TABLE faleconosco
			(
				id INT PRIMARY KEY AUTO_INCREMENT,
				nome VARCHAR(100),
				email VARCHAR(200),
				telefone INT,
				assunto VARCHAR(50),
				mensagem TEXT

			)"
		);


		
	
		$queryInserir=mysqli_query($conexao,"
			INSERT INTO faleconosco(nome,email,telefone,assunto,mensagem)values('$nome', '$email',$telefone,'$assunto','$mensagem')"
		);
	
	if($query){
		echo"Tabela Criada";
	}
	else{
		echo"Tabela já existente";
	}
	if($queryInserir){
		echo"Inserção concluida";
	}
	else{
		echo"Erro ao inserir";
	}
	
	$query=mysqli_query($conexao,"SELECT * FROM faleconosco");
	while($tabela=mysqli_fetch_array($query)){
		echo $tabela["nome"]."</br>";
		echo $tabela["email"]."</br>";
		echo $tabela["telefone"]."</br>";
		echo $tabela["assunto"]."</br>";
		echo $tabela["mensagem"]."</br>";
	}
	
?>
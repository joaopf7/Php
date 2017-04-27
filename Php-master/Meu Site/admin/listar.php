
<?php
	//conectando ao servidor
    $conexao = mysqli_connect("localhost","root","");

    // conectando ao BD criado
    $db = mysqli_select_db($conexao, "meusite");
    
    // Executando query e retornando valores da tabela "faleconosco"

    $query = mysqli_query($conexao, "SELECT * FROM admin");
	
	while($tabela = mysqli_fetch_array($query)){
        
        echo $tabela['titulo']. "<br>";
        echo $tabela['subtitulo']. "<br>" ;
        echo $tabela['texto']. "<br>";
        
    }
?>
<div class="container">
	<h3 id="titFaleConosco">Cadastre-se</h3>
	<form id="contactform" action="conecta.inc.php" method="post" target="nele">
		<fieldset>
			<p>Entre em contato conosco e nos diga o que você sentiu falta.</p>
			<p>Sugestões e críticas também são bem-vindas!</p>

		<label>Nome: </label><input type="text" class="form-control" required="" data-validation-required-message="Please enter your name." name="nome" id="nome"/></br>
		<label>Email: </label><input type="email" class="form-control" name="email" id="email"/></br>
		<label>Telefone: </label><input type="tel" class="form-control" name="tele" id="tele"/></br>
		<label>Assunto: </label><input type="text" class="form-control" name="assunto" id="assunto"/></br>
		<label>Mensagem: </label><textarea name="mensagem" class="form-control" id="mensagem" rows="5" cols="15"></textarea></br>
		<button type="submit" class="btn btn-primary">Enviar</button>
		</br></br>
		<p id="mensagem">Queremos fazer o melhor conteúdo para você!</p>
		</fieldset>

	</form>
	<iframe id="nele" name="nele" style="border: none; width: 90%">

	</iframe>
</div>
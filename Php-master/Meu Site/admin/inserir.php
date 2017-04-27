<div class="container">
	<h3>Inserir dados</h3>
	<form action="config.inc.php" method="post" target="nele">
		<fieldset>
			

		<label>Titulo: </label><input type="text" class="form-control" required="" data-validation-required-message="Please enter with title." name="titulo" id="titulo"/></br>
		<label>Subtitulo: </label><input type="text" class="form-control" name="subtitulo" id="subtitulo"/></br>
		<label>Texto: </label><textarea name="texto" class="form-control" id="texto" rows="5" cols="15"></textarea></br>
		<button type="submit" class="btn btn-primary">Enviar</button>
		</br></br>
		</fieldset>

	</form>
	<iframe id="nele" name="nele" style="border: none; width: 90%">

	</iframe>
</div>
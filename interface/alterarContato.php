

<?php 

include 'menu.php';




?>

<div class="container">

	<div class="row">
		<div class="col-12">
			<fieldset>
				<form action="../controller/controllerContato.php" method="post">

					<input type="hidden" name="opcao" value="1" />

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" name="nome" id="nome" value="<?php $cont->nome ?>" placeholder="Nome">
						</div>
						<div class="form-group col-md-3">
							<label for="telefoneFixo">Telefone Fixo</label>
							<input type="number" class="form-control" name="telefoneFixo" id="telefoneFixo" placeholder="Telefone Fixo">
						</div>
						<div class="form-group col-md-3">
							<label for="telefoneCelular">Telefone Celular</label>
							<input type="number" class="form-control" name="telefoneCelular" id="telefoneCelular" placeholder="Celular">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="rua">Rua</label>
							<input type="text" class="form-control" name="rua" id="rua" placeholder="Rua">
						</div>

						<div class="form-group col-md-4">
							<label for="bairro">Bairro</label>
							<input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro">
						</div>
						<div class="form-group col-md-4">
							<label for="cidade">Cidade</label>
							<input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="estado">Estado</label>
							<input type="text" class="form-control" name="estado" id="estado" placeholder="Estado">
						</div>

						<div class="form-group col-md-4">
							<label for="cep">Cep</label>
							<input type="text" class="form-control" name="cep" id="cep" placeholder="cep">
						</div>




					<!--		<div class="form-group">
								<label for="cidade">Cidade</label>
								<select type="text" class="form-control" name="id_cidade">
									<?php foreach ($cidades as $c) {
			#							echo "<option value=$c->id_cidade> $c->cidade</option>";
									} ?>	

								</select>
							</div>
						-->
						<div class="form-group col-md-4">
							<label for="pais">País</label>
							<input type="text" class="form-control" name="pais" id="cep" placeholder="País">
						</div>
					</div>
					<br>

					<br>
					<button type="submit" class="btn btn-primary">Gravar</button>
				</form>
			</fieldset>
		</div>


	</div>

</div>


</body>

</html>
<h1>Editar Paciente</h1>

<?php  
	$sql = "SELECT * FROM paciente WHERE id_paciente=".$_REQUEST['id_paciente'];

	$res = $conn->query($sql);
	$row = $res->fetch_object();

?>

<form action="?page=salvar-paciente" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_paciente" value="<?php print $row->id_paciente ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome_paciente" value=" <?php print $row->nome_paciente; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>E-mail</label>
		<input type="text" name="email_paciente" value=" <?php print $row->email_paciente; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<input type="text" name="endereco_paciente" value=" <?php print $row->endereco_paciente; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Fone</label>
		<input type="text" name="fone_paciente" value=" <?php print $row->fone_paciente; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="date" name="dt_nasc_paciente" value=" <?php print $row->dt_nasc_paciente; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF</label>
		<input type="text" name="cpf_paciente" value=" <?php print $row->cpf_paciente; ?>" class="form-control" required>
	</div>
	<div class="mb-3 col-lg-12" style="text-align: center;">
		<label> Sexo</label> <br>
		<label>
		<input type="radio" name="sexo_paciente" value="m"> Masculino
		</label> <br>
		<label>
		<input type="radio" name="sexo_paciente" value="f"> Feminino
		</label>
	
	</div>

	<div class="col-lg-12" style="text-align: center;">
	    <button type="submit" class="btn btn-success">Enviar</button>
	</div>

</form>
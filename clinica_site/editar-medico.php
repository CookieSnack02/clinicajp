<h1>Editar Médico</h1>
<?php  
	$sql = "SELECT * FROM medico WHERE id_medico=".$_REQUEST['id_medico'];

	$res = $conn->query($sql);

	$row = $res->fetch_object();
?>

<form action="?page=salvar-medico" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_medico" value="<?php print $row->id_medico; ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome_medico" class="form-control" value="<?php print $row->nome_medico; ?>">
	</div>

	<div class="mb-3">
		<label>CRM</label>
		<input type="text" name="crm_medico" class="form-control" value="<?php print $row->crm_medico; ?>">
	</div>

	<div class="mb-3">
		<label>Especialidade</label>
		<input type="text" name="especialidade_medico" class="form-control" value="<?php print $row->especialidade_medico; ?>">
	</div>

	<div class="mb-3">
		<button type="submit" class="btn btn-primary align-items-center">Enviar</button>
	</div>

</form>
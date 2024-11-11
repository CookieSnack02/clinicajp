<h1>Editar Consulta</h1>
<?php  
    $sql = "SELECT * FROM consulta WHERE id_consulta=".$_REQUEST['id_consulta'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar-consulta" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_consulta" value="<?php echo $row->id_consulta; ?>">
    <div class="mb-3">
        <label>Identificação do Paciente</label>
        <select name="paciente_id_paciente" class="form-control" required>
            <?php  
                $sql = "SELECT id_paciente, nome_paciente FROM paciente";
                $res_paciente = $conn->query($sql);
                while ($row_paciente = $res_paciente->fetch_object()) {
                    $selected = ($row->paciente_id_paciente == $row_paciente->id_paciente) ? "selected" : "";
                    echo "<option value='".$row_paciente->id_paciente."' $selected>".$row_paciente->nome_paciente." (ID: ".$row_paciente->id_paciente.")</option>";
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Identificação do Médico</label>
        <select name="medico_id_medico" class="form-control" required>
            <?php  
                $sql = "SELECT id_medico, nome_medico FROM medico";
                $res_medico = $conn->query($sql);
                while ($row_medico = $res_medico->fetch_object()) {
                    $selected = ($row->medico_id_medico == $row_medico->id_medico) ? "selected" : "";
                    echo "<option value='".$row_medico->id_medico."' $selected>".$row_medico->nome_medico."</option>";
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Data da Consulta</label>
        <input type="date" name="data_consulta" class="form-control" value="<?php echo $row->data_consulta; ?>" required>
    </div>
    <div class="mb-3">
        <label>Hora da Consulta</label>
        <input type="time" name="hora_consulta" class="form-control" value="<?php echo $row->hora_consulta; ?>" required>
    </div>
    <div class="mb-3">
        <label>Descrição da Consulta</label>
        <textarea class="form-control" name="descricao_consulta" required><?php echo $row->descricao_consulta; ?></textarea>
    </div>
    <div class="col-lg-12" style="text-align: center;">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>

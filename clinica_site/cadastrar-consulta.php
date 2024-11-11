<h1>Cadastrar Consulta</h1>
<form action="?page=salvar-consulta" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Identificação do Paciente</label>
        <select name="paciente_id_paciente" class="form-control" required>
            <?php  
                $sql = "SELECT id_paciente, nome_paciente FROM paciente";
                $res = $conn->query($sql);
                while ($row = $res->fetch_object()) {
                    echo "<option value='".$row->id_paciente."'>".$row->nome_paciente." (ID: ".$row->id_paciente.")</option>";
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Identificação do Médico</label>
        <select name="medico_id_medico" class="form-control" required>
            <?php  
                $sql = "SELECT id_medico, nome_medico FROM medico";
                $res = $conn->query($sql);
                while ($row = $res->fetch_object()) {
                    echo "<option value='".$row->id_medico."'>".$row->nome_medico."</option>";
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Data da Consulta</label>
        <input type="date" name="data_consulta" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Hora da Consulta</label>
        <input type="time" name="hora_consulta" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Descrição da Consulta</label>
        <textarea class="form-control" name="descricao_consulta" required></textarea>
    </div>
    <div class="mb-3" style="text-align: center;">
        <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
</form>

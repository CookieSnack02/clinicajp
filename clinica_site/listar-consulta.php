<h1>Listar Consulta</h1>

<?php   
    $sql = "
    SELECT 
        consulta.id_consulta, 
        paciente.nome_paciente, 
        medico.nome_medico, 
        consulta.data_consulta, 
        consulta.hora_consulta, 
        consulta.descricao_consulta 
    FROM consulta
    INNER JOIN paciente ON consulta.paciente_id_paciente = paciente.id_paciente
    INNER JOIN medico ON consulta.medico_id_medico = medico.id_medico";
    
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        print '<div class="col-lg-12" style="text-align: center;">';
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome do Paciente</th>";
            print "<th>Nome do Médico</th>";
            print "<th>Data da Consulta</th>";
            print "<th>Hora da Consulta</th>";
            print "<th>Descrição da Consulta</th>";
            print "<th>Ações</th>";
            print "</tr>";
            
        while($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id_consulta."</td>";
            print "<td>".$row->nome_paciente."</td>";
            print "<td>".$row->nome_medico."</td>";
            print "<td>".$row->data_consulta."</td>";
            print "<td>".$row->hora_consulta."</td>";
            print "<td>".$row->descricao_consulta."</td>";
            print "<td>";
            print "<a href='?page=editar-consulta&id_consulta=".$row->id_consulta."' class='btn btn-primary btn-sm'>Editar</a> ";
            print "<a href='?page=salvar-consulta&acao=excluir&id_consulta=".$row->id_consulta."' onclick='return confirm(\"Tem certeza que deseja excluir esta consulta?\")' class='btn btn-danger btn-sm'>Excluir</a>";
            print "</td>";
            print "</tr>";
        }

        print "</table>";
        print "</div>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>

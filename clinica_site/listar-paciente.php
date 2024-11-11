<h1> Listar Paciente </h1>

<?php   
    $sql = "SELECT * FROM paciente";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print '<div class="col-lg-12" style="text-align: center;">';
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th> # </th>";
            print "<th> Nome </th>";
            print "<th> E-Mail</th>";
            print "<th> Telefone</th>";
            print "<th> Data de Nascimento</th>";
            print "<th> Ações </th>";
            print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>" .$row->id_paciente. "</td>";
            print "<td>".$row->nome_paciente. "</td>";
            print "<td>".$row->email_paciente. "</td>";
            print "<td>".$row->fone_paciente. "</td>";
            print "<td>".$row->dt_nasc_paciente. "</td>";
            print "<td> 
                <button onclick=\" location.href='?page=editar-paciente&id_paciente=".$row->id_paciente."'\" class='btn btn-success'> Editar </button>
                <button onclick=\" if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-paciente&acao=excluir&id_paciente=".$row->id_paciente."';}else{false};\" class='btn btn-danger'> Excluir </button>
            </td>";
            print "</tr>";
        }
        print "</table>";
        print "</div>";
    
    } else {
        print "<p class='alert alert-danger'> Não encontrou resultados! </p> ";
    }
?>

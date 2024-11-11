<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $id_paciente = $_POST['paciente_id_paciente'];
        $id_medico = $_POST['medico_id_medico'];
        $data_consulta = $_POST['data_consulta'];
        $hora_consulta = $_POST['hora_consulta'];
        $descricao = $_POST['descricao_consulta'];

        // Sanitização dos valores recebidos
        $id_paciente = $conn->real_escape_string($id_paciente);
        $id_medico = $conn->real_escape_string($id_medico);
        $data_consulta = $conn->real_escape_string($data_consulta);
        $hora_consulta = $conn->real_escape_string($hora_consulta);
        $descricao = $conn->real_escape_string($descricao);
        
        $sql = "INSERT INTO consulta (paciente_id_paciente, medico_id_medico, data_consulta, hora_consulta, descricao_consulta) 
                VALUES ('$id_paciente', '$id_medico', '$data_consulta', '$hora_consulta', '$descricao')";

        $res = $conn->query($sql); 
        if ($res === true) {
            print "<script>alert('Cadastrou com sucesso!');</script>";
            print "<script>window.location.href='?page=listar-consulta';</script>"; 
        } else {
            print "<script>alert('Não foi possível cadastrar.');</script>";
            print "<script>window.location.href='?page=listar-consulta';</script>"; 
        }
        break;

    case 'editar':
        $id_consulta = $_POST['id_consulta'];
        $id_paciente = $_POST['paciente_id_paciente'];
        $id_medico = $_POST['medico_id_medico'];
        $data_consulta = $_POST['data_consulta'];
        $hora_consulta = $_POST['hora_consulta'];
        $descricao = $_POST['descricao_consulta'];

        // Sanitização dos valores recebidos
        $id_consulta = $conn->real_escape_string($id_consulta);
        $id_paciente = $conn->real_escape_string($id_paciente);
        $id_medico = $conn->real_escape_string($id_medico);
        $data_consulta = $conn->real_escape_string($data_consulta);
        $hora_consulta = $conn->real_escape_string($hora_consulta);
        $descricao = $conn->real_escape_string($descricao);

        $sql = "UPDATE consulta SET 
                paciente_id_paciente='$id_paciente',
                medico_id_medico='$id_medico',
                data_consulta='$data_consulta',
                hora_consulta='$hora_consulta',
                descricao_consulta='$descricao'
            WHERE id_consulta='$id_consulta'";
        
        $res = $conn->query($sql); 
        if ($res === true) {
            print "<script>alert('Editou com sucesso!');</script>";
            print "<script>window.location.href='?page=listar-consulta';</script>"; 
        } else {
            print "<script>alert('Não foi possível editar.');</script>";
            print "<script>window.location.href='?page=editar-consulta&id_consulta=$id_consulta';</script>"; 
        }
        break;

    case 'excluir':
        $id_consulta = $_REQUEST['id_consulta'];

        // Sanitização do valor recebido
        $id_consulta = $conn->real_escape_string($id_consulta);

        $sql = "DELETE FROM consulta WHERE id_consulta='$id_consulta'";
        $res = $conn->query($sql);
        
        if ($res === true) {
            print "<script>alert('Excluiu com sucesso!');</script>";
            print "<script>window.location.href='?page=listar-consulta';</script>"; 
        } else {
            print "<script>alert('Não foi possível excluir.');</script>";
            print "<script>window.location.href='?page=listar-consulta';</script>"; 
        }
        break;
}
?>

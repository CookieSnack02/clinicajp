<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $nome = $_POST['nome_paciente'];
        $email = $_POST['email_paciente'];
        $endereco = $_POST['endereco_paciente'];
        $fone = $_POST['fone_paciente'];
        $cpf = $_POST['cpf_paciente'];
        $data = $_POST['dt_nasc_paciente'];
        $sexo = $_POST['sexo_paciente'];

        $sql = "INSERT INTO paciente (nome_paciente, dt_nasc_paciente, email_paciente, endereco_paciente, fone_paciente, cpf_paciente, sexo_paciente)
                VALUES ('{$nome}', '{$data}', '{$email}', '{$endereco}', '{$fone}', '{$cpf}', '{$sexo}')";

        $res = $conn->query($sql);
        if ($res == true) {
            print "<script>alert('Cadastrou com sucesso');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        } else {
            print "<script>alert('Não foi possível');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        }
        break;

    case 'editar':
        $nome = $_POST['nome_paciente'];
        $email = $_POST['email_paciente'];
        $endereco = $_POST['endereco_paciente'];
        $fone = $_POST['fone_paciente'];
        $cpf = $_POST['cpf_paciente'];
        $data = $_POST['dt_nasc_paciente'];
        $sexo = $_POST['sexo_paciente'];

        $sql = "UPDATE paciente SET 
                nome_paciente='{$nome}', 
                email_paciente='{$email}', 
                endereco_paciente='{$endereco}', 
                fone_paciente='{$fone}', 
                cpf_paciente='{$cpf}', 
                dt_nasc_paciente='{$data}', 
                sexo_paciente='{$sexo}' 
                WHERE id_paciente=" . $_REQUEST['id_paciente'];

        $res = $conn->query($sql);
        if ($res == true) {
            print "<script>alert('Editou com sucesso!');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        } else {
            print "<script>alert('Não foi possível');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        }
        break;

    case 'excluir':
        print "<script>console.log('ID do paciente: " . $_REQUEST['id_paciente'] . "');</script>";

        $sql = "DELETE FROM paciente WHERE id_paciente=" . $_REQUEST['id_paciente'];

        $res = $conn->query($sql);
        if ($res == true) {
            print "<script>alert('Excluiu com sucesso!');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        } else {
            print "<script>alert('Não foi possível excluir: " . $conn->error . "');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        }
    }

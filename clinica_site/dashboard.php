<?php  
    session_start();
    if (empty($_SESSION)) {
        print "<script>location.href='login1.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Clínica Médica</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #e0f7fa;
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: #00796b;
        }
        .navbar-brand, .nav-link, .btn-light {
            color: #ffffff !important;
            font-weight: 500;
        }
        .navbar-brand:hover, .nav-link:hover, .btn-light:hover {
            color: #b2dfdb !important;
        }
        .container {
            margin-top: 2rem;
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .btn-danger {
            background-color: #d32f2f;
        }
        .btn-danger:hover {
            background-color: #b71c1c;
        }
        .dropdown-menu {
            border-radius: 8px;
            animation: dropdownFadeIn 0.3s ease;
        }
        @keyframes dropdownFadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .page-content {
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: fadeInContent 1s ease;
        }
        @keyframes fadeInContent {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-medical" viewBox="0 0 16 16">
                    <path d="M8.5 4.5a.5.5 0 0 0-1 0v.634l-.549-.317a.5.5 0 1 0-.5.866L7 6l-.549.317a.5.5 0 1 0 .5.866l.549-.317V7.5a.5.5 0 1 0 1 0v-.634l.549.317a.5.5 0 1 0 .5-.866L9 6l.549-.317a.5.5 0 1 0-.5-.866l-.549.317zM5.5 9a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1"/>
                </svg>
                SCM - Sistema de Clínica Médica
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="medicosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Médicos</a>
                        <ul class="dropdown-menu" aria-labelledby="medicosDropdown">
                            <li><a class="dropdown-item" href="?page=listar-medico">Listar</a></li>
                            <li><a class="dropdown-item" href="?page=cadastrar-medico">Cadastrar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="consultasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Consultas</a>
                        <ul class="dropdown-menu" aria-labelledby="consultasDropdown">
                            <li><a class="dropdown-item" href="?page=listar-consulta">Listar</a></li>
                            <li><a class="dropdown-item" href="?page=cadastrar-consulta">Cadastrar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pacientesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pacientes</a>
                        <ul class="dropdown-menu" aria-labelledby="pacientesDropdown">
                            <li><a class="dropdown-item" href="?page=listar-paciente">Listar</a></li>
                            <li><a class="dropdown-item" href="?page=cadastrar-paciente">Cadastrar</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <?php  
                        echo "<span class='me-3 text-white'>Olá, ".$_SESSION['nome']."</span>";
                    ?>
                    <a href="logout.php" class="btn btn-danger">Sair</a>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="container page-content">
        <div class="row">
            <div class="col">
                <?php
                    include("config.php");
                    switch (@$_REQUEST['page']) {
                        case 'cadastrar-medico': include('cadastrar-medico.php'); break;
                        case 'editar-medico': include('editar-medico.php'); break;
                        case 'listar-medico': include('listar-medico.php'); break;
                        case 'salvar-medico': include('salvar-medico.php'); break;
                        case 'cadastrar-paciente': include('cadastrar-paciente.php'); break;
                        case 'editar-paciente': include('editar-paciente.php'); break;
                        case 'listar-paciente': include('listar-paciente.php'); break;
                        case 'salvar-paciente': include('salvar-paciente.php'); break;
                        case 'cadastrar-consulta': include('cadastrar-consulta.php'); break;
                        case 'editar-consulta': include('editar-consulta.php'); break;
                        case 'listar-consulta': include('listar-consulta.php'); break;
                        case 'salvar-consulta': include('salvar-consulta.php'); break;
                        default: include('home.php');
                    }
                ?>
            </div>
        </div> 
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #e0f7fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }
        .login-card {
            max-width: 400px;
            padding: 2rem;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            background-color: #ffffff;
            transform: translateY(-20px);
            opacity: 0;
            animation: fadeIn 1s ease-out forwards;
        }
        .login-card h1 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #00796b;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .login-card .btn-primary {
            background-color: #00796b;
            border: none;
        }
        .login-card .btn-primary:hover {
            background-color: #004d40;
        }
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        /* Animação de fundo */
        .background-animation {
            position: absolute;
            width: 200vw;
            height: 200vh;
            top: -50vh;
            left: -50vw;
            background: radial-gradient(circle, rgba(224, 247, 250, 0.7), #b2ebf2, #80deea);
            animation: animateBg 10s linear infinite;
            z-index: -1;
        }
        @keyframes animateBg {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>

<div class="background-animation"></div>

<div class="login">
    <div class="login-card">
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuário</label>
                <input type="text" name="usuario" id="usuario" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>

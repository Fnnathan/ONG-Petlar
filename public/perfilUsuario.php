<?php
session_start();


if (!isset($_SESSION['logado']) || $_SESSION['logado'] != 'sim') {
    header("Location: ./logar.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário - PETLAR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* ======== CSS isolado apenas para o perfil ======== */
        .perfil-container {
            background-color: #f2f8ff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 40px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .perfil-caixa {
            background-color: #0066a2;
            color: white;
            width: 600px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            padding: 40px;
        }

        .perfil-topo {
            display: flex;
            justify-content: flex-end;
        }

        .perfil-btn-sair {
            text-decoration: none;
            color: white;
            background-color: #0277aa;
            padding: 8px 15px;
            border-radius: 20px;
            transition: 0.3s;
            font-size: 14px;
        }

        .perfil-btn-sair:hover {
            background-color: #015d82;
        }

        .perfil-icone {
            text-align: center;
            margin-bottom: 30px;
        }

        .perfil-icone i {
            font-size: 70px;
            color: #ccefff;
        }

        .perfil-titulo {
            text-align: center;
            color: #aee0ff;
            font-size: 24px;
            margin-bottom: 30px;
        }

        .perfil-linha {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #0077bb;
            padding: 12px 20px;
            border-radius: 8px;
            margin: 10px 0;
            font-size: 18px;
        }

        .perfil-linha strong {
            width: 100px;
        }

        .perfil-linha span {
            flex: 1;
            text-align: left;
        }

        .perfil-editar {
            color: #ccefff;
            cursor: pointer;
            transition: 0.3s;
        }

        .perfil-editar:hover {
            color: white;
        }

        .perfil-btn-enviar {
            background-color: white;
            color: #0066a2;
            font-weight: bold;
            border: none;
            border-radius: 20px;
            padding: 12px 25px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            margin: 30px auto 0;
            transition: 0.3s;
        }

        .perfil-btn-enviar:hover {
            background-color: #e6f5ff;
        }
    </style>
</head>

<body>
    <div class="perfil-container">

        <div class="perfil-caixa">
            <div class="perfil-topo">
                <a href="../controle/deslogar.php" class="perfil-btn-sair">
                    <i class="fa-solid fa-right-from-bracket"></i> Sair
                </a>
            </div>

            <div class="perfil-icone">
                <i class="fa-solid fa-user-circle"></i>
            </div>

            <h2 class="perfil-titulo">Informações Pessoais</h2>

            <div class="perfil-linha">
                <strong>Nome</strong>
                <span><?php echo $_SESSION['nome']; ?></span>
                <i class="fa-solid fa-pen-to-square perfil-editar"></i>
            </div>

            <div class="perfil-linha">
                <strong>Email</strong>
                <span><?php echo $_SESSION['email']; ?></span>
                <i class="fa-solid fa-pen-to-square perfil-editar"></i>
            </div>

            <div class="perfil-linha">
                <strong>Senha</strong>
                <span>****</span>
                <i class="fa-solid fa-pen-to-square perfil-editar"></i>
            </div>

            <div class="perfil-linha">
                <strong>Endereço</strong>
                <span><?php echo $_SESSION['endereco_usuario']; ?></span>
                <i class="fa-solid fa-pen-to-square perfil-editar"></i>
            </div>

            <div class="perfil-linha">
                <strong>Telefone</strong>
                <span><?php echo $_SESSION['telefone']; ?></span>
                <i class="fa-solid fa-pen-to-square perfil-editar"></i>
            </div>

            <button class="perfil-btn-enviar">
                <i class="fa-solid fa-user-check"></i> Enviar
            </button>
        </div>

    </div>
</body>

</html>
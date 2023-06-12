<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redireciona para a página de login
    header('Location: index.php');
    exit;
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Items</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style type="text/css">
        body {
            background-color: white;
            color: black;

        }

        .inp {
            width: 30px;
        }

        .titulo {
            text-align: center;
        }

        	/*encosta o voltar no canto direito*/
		.voltar {
			margin-left: 1530px;
		}

        .retorno {
            margin-top: -40px;
        }
        

    </style> 

</head>

<body style="background-image: url('fundo-azul-do-gradiente-de-luxo-abstrato-liso-azul-escuro-com-vinheta-preta-studio-banner.jpg'); background-size: cover;">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Controle de Estoque</a>
            <div class="d-flex justify-content-end">
                <a href="voltar.php" class="btn btn-secondary me-3 voltar">Voltar</a>
            </div>
            <div class="d-flex justify-content-end">
                <a href="sair.php" class="btn btn-secondary me-3">Sair</a>
            </div>
        </div>
    </nav>


    <div class="container col-8">
        <form action="salvarUsuario.php" method="POST">
            <div class="mb-3"><br>

                <h1 class="titulo">Cadastro de Usuário</h1>
                <br>

                <label for="exampleFormControlInput1" class="form-label" class="inp">Nome:</label>
                <input type="text" class="form-control border border-dark border-1" id="exampleFormControlInput1" placeholder="Nome do usuário" name="nome"><br>

                <label for="exampleFormControlInput1" class="form-label" class="inp">Tipo de Acesso</label>
                <select  name="tipo">
                    <option value="1"  class="form-control form-control-sm">Administrador</option>
                    <option value="2" class="form-control form-control-sm">Usuário Normal</option>
                </select><br>

                <label for="exampleFormControlInput1" class="form-label" class="inp">Email</label>
                <input type="text" class="form-control border border-dark border-1" id="exampleFormControlInput1" placeholder="Email" name="email"><br>

                <label for="exampleFormControlInput1" class="form-label" class="inp">Senha</label>
                <input class="form-control border border-dark border-1" id="exampleFormControlInput1" placeholder="Senha" name="senha" type="password"><br>






                <input type="submit" class="btn btn-secondary me-3" name="enviar"> 
                <div class="d-flex justify-content-end">
                    <a href="voltar.php" class="btn btn-secondary me-3 voltar retorno">Voltar</a>
                </div>
                
        </form>
        <br>
    </div>




    </div>
    </form>
</body>

</html>
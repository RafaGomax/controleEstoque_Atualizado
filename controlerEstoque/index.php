<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv=”content-type” content="text/html;" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="keywords" content="palavras, chave, pesquisa, google" />
    <title>Login</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
		integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	

	
</head>

<body> 
	<main class="">
	<section class="background-radial-gradient overflow-hidden">
        <style>
           body{
            text-align: center;
            background-color: blueviolet;
            /*Background que estiliza o fundo da tela de login em forma de degrade */
            background-image: radial-gradient(circle at 12.5% 12.5%, #bbbdff 0, #8196ff 25%, #486ee5 50%, #0048a4 75%, #002669 100%);
           }

           /*Classe que estiliza div principal da tela*/          
            .bg-glass {
                background-color: hsla(0, 0%, 100%, 0.9) !important;
                backdrop-filter: saturate(200%) blur(25px);
            }
        </style>
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <br><br><br>
            <div class="row gx-lg-5 align-items-center mb-5">

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="text-center card-body px-4 pt-5 px-md-5">
                            <h1 class="mb-4 display-5 fw-bold" style="color: 000">
                                Login
                            </h1>
                            <form action="sclogin.php" method="POST">
                                <div class="form-floating mb-3">
                                    <input name="email" type="text" class="form-control" id="floatingInput5" placeholder="">
                                    <label for="floatingInput5"> Email</label>
                                </div>
                                <div class="form-floating mb-1">
                                    <input name="senha" type="password" class="form-control" id="floatingInput6" placeholder="">
                                    <label for="floatingInput6"> Senha</label>
                                </div>

                            
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-secondary btn-block mb-4 rounded-pill px-5">
                                    Entrar
                                </button>

                            </form>
                            <p class="small text-muted">Não possui conta? <a class="text-muted fw-bold text-decoration-none" href="semCadastro.php">Solicitar Cadastro</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br><br><br><br>
    </section>
	</main>	


</body>

</html>


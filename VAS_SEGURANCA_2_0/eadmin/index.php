<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Painel Administrativo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="author" content="Edmilson | EPOWEB - Soluções em Tecnologias">
  <!-- Favicons -->
  <link href="assets/img/favicon-vas.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">

</head>
<body>
  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/vas-logo.png" alt="">
                  <span class="d-none d-lg-block">Painel Controle</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Faça login na sua conta</h5>
                    <p class="text-center small">Digite seu nome de usuário e senha para entrar</p>
                  </div>
                  <form class="row g-3 needs-validation" novalidate "form-signin" method="POST" action="valida.php">

                    <div class="col-12">
                      <label for="inputEmail" class="form-label">Usuário</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                          <input type="email" name="txt_usuario" id="inputEmail" class="form-control" placeholder="Usuário" required autofocus>
                        <div class="invalid-feedback">Por favor insira seu nome de usuário.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="inputPassword" class="form-label">Senha</label>
                        <input type="password" name="txt_senha" id="inputPassword" class="form-control" placeholder="Senha" required>
                      <div class="invalid-feedback">Por favor, insira sua senha!</div>
                    </div>

                    <div class="col-12">  
                      <center><button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button></center>
                    </div>         
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="text-center text-danger">
          <?php if(isset($_SESSION['loginErro'])){
            echo $_SESSION['loginErro'];
            unset ($_SESSION['loginErro']);
          }?>
        </p>
        <p class="text-center text-success">
          <?php if(isset($_SESSION['loginDeslogado'])){
            echo $_SESSION['loginDeslogado'];
            unset ($_SESSION['loginDeslogado']);
          }?>
        </p>
        <p class="text-center text-success">
          <?php if(isset($_SESSION['recuperarsenha'])){
            echo $_SESSION['recuperarsenha'];
            unset ($_SESSION['recuperarsenha']);
          }?>
        </p>
      </section>
    </div>
  </main><!-- End #main -->
</body>
</html>
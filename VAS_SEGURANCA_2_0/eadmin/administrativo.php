<?php
	session_start();
	include_once("seguranca.php");
	include_once("conexao/conexao.php");	
	seguranca_adm();
	include_once('../lib/confin_url.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <title>PAINEL ADMINISTRATIVO</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <link href="css/theme.css" rel="stylesheet">
  <script src="js/ie-emulation-modes-warning.js"></script>
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/javascriptpersonalizado.js"></script>
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  <!-- Favicons -->
  <link href="assets/img/favicon-vas.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body role="document">
<?php 
			
			$pag[1] = "administrativo/adm_home.php";
			
			$pag[2] = "administrativo/listar/adm_listar_usuario.php";
			$pag[3] = "administrativo/cadastro/adm_cad_usuario.php";
			$pag[4] = "administrativo/editar/adm_editar_usuario.php";
			$pag[5] = "administrativo/visualizar/adm_visual_usuario.php";
			
			$pag[6] = "administrativo/listar/adm_listar_nivel_acesso.php";
			$pag[7] = "administrativo/cadastro/adm_cad_nivel_acesso.php";			
			$pag[8] = "administrativo/editar/adm_editar_nivel_acesso.php";
			$pag[9] = "administrativo/visualizar/adm_visual_nivel_acesso.php";
			
			$pag[10] = "administrativo/listar/adm_listar_situacoes.php";
			$pag[11] = "administrativo/cadastro/adm_cad_situacoes.php";			
			$pag[12] = "administrativo/editar/adm_editar_situacoes.php";
			$pag[13] = "administrativo/visualizar/adm_visual_situacoes.php";
			
			$pag[14] = "administrativo/pesquisar/adm_pesq_usuario.php";
			$pag[15] = "administrativo/editar/adm_editar_usuario_senha.php";
			
			$pag[50] = "administrativo/listar/adm_listar_cat_artigos.php";
			
			$pag[51] = "administrativo/listar/adm_listar_sit_artigos.php";
			$pag[52] = "administrativo/visualizar/adm_visual_sit_artigos.php";
			$pag[53] = "administrativo/cadastro/adm_cad_sit_artigos.php";			
			$pag[54] = "administrativo/editar/adm_editar_sit_artigos.php";
			
			$pag[55] = "administrativo/listar/adm_listar_artigos.php";
			$pag[56] = "administrativo/visualizar/adm_visual_artigos.php";
			$pag[57] = "administrativo/cadastro/adm_cad_artigos.php";			
			$pag[58] = "administrativo/editar/adm_editar_artigos.php";
			
			$pag[59] = "administrativo/listar/adm_listar_coment_artigos.php";
			$pag[60] = "administrativo/visualizar/adm_visual_coment_artigos.php";
			$pag[61] = "administrativo/cadastro/adm_cad_coment_artigos.php";			
			$pag[62] = "administrativo/editar/adm_editar_coment_artigos.php";
			
			$pag[63] = "administrativo/listar/adm_listar_msg_contato.php";
			$pag[64] = "administrativo/visualizar/adm_visual_msg_contato.php";
			$pag[65] = "administrativo/cadastro/adm_cad_msg_contato.php";			
			$pag[66] = "administrativo/editar/adm_editar_msg_contato.php";
			
			$pag[67] = "administrativo/listar/adm_listar_carrousel.php";
			$pag[68] = "administrativo/visualizar/adm_visual_carrousel.php";
			$pag[69] = "administrativo/cadastro/adm_cad_carrousel.php";			
			$pag[70] = "administrativo/editar/adm_editar_carrousel.php";
			
			$pag[71] = "administrativo/listar/adm_listar_sit_carrousel.php";
			$pag[72] = "administrativo/visualizar/adm_visual_sit_carrousel.php";
			$pag[73] = "administrativo/cadastro/adm_cad_sit_carrousel.php";
			$pag[74] = "administrativo/editar/adm_editar_sit_carrousel.php";
			
			$pag[75] = "administrativo/listar/adm_listar_sit_msg_contato.php";
			$pag[76] = "administrativo/visualizar/adm_visual_sit_msg_contato.php";
			$pag[77] = "administrativo/cadastro/adm_cad_sit_msg_contato.php";
			$pag[78] = "administrativo/editar/adm_editar_sit_msg_contato.php";
			
			$pag[79] = "administrativo/listar/adm_listar_sit_coment.php";
			$pag[80] = "administrativo/visualizar/adm_visual_sit_coment.php";
			$pag[81] = "administrativo/cadastro/adm_cad_sit_coment.php";
			$pag[82] = "administrativo/editar/adm_editar_sit_coment.php";
			
			$pag[83] = "administrativo/listar/adm_listar_transac.php";
			$pag[84] = "administrativo/visualizar/adm_visual_transac.php";
			$pag[85] = "administrativo/cadastro/adm_cad_transac.php";
			$pag[86] = "administrativo/editar/adm_editar_transac.php";

			$pag[87] = "administrativo/listar/adm_listar_carrinho.php";
			$pag[88] = "administrativo/visualizar/adm_visual_carrinho.php";
			$pag[89] = "administrativo/cadastro/adm_cad_carrinho.php";
			$pag[90] = "administrativo/editar/adm_editar_carrinho.php";	
			
			//$pag[91] = "administrativo/listar/adm_listar_carrinho_user.php";
			$pag[92] = "administrativo/visualizar/adm_visual_carrinho_user.php";
			//$pag[93] = "administrativo/cadastro/adm_cad_carrinho_user.php";
			//$pag[94] = "administrativo/editar/adm_editar_carrinho_user.php";	

			$pag[95] = "administrativo/listar/adm_listar_usuario_plano.php";
			$pag[96] = "administrativo/visualizar/adm_visual_usuario_plano.php";
			$pag[97] = "administrativo/cadastro/adm_cad_usuario_plano.php";
			$pag[98] = "administrativo/editar/adm_editar_usuario_plano.php";
			
			$pag[99] = "administrativo/listar/adm_listar_transac_user.php";
			
			if(!empty($_GET["link"])){
				$link = $_GET["link"];
				if(file_exists($pag[$link])){
					include $pag[$link];
				}else{
					include "administrativo/adm_home.php";
				}				
			}else{
				include "administrativo/adm_home.php";
			}
		?>	
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/vas-logo.png" alt="">
        <span class="d-none d-lg-block">VAS Segurança</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Pesquisar ..." title="Digite sua Pesquisa">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
				          <a href="sair.php"><button type="submit" class="btn btn-success">Sair</button></a>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="administrativo.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

	   <!-- Banner -->
	   <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#banner-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-video2"></i><span>Banners</span><i class="bi bi-chevron-down ms-auto"></i></a>
        <ul id="banner-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li><a href="administrativo.php?link=67"><i class="bi bi-circle"></i><span>Listar Banners</span></a></li>
          <li><a href="administrativo.php?link=71"><i class="bi bi-circle"></i><span>Situação Banners</span></a></li>
        </ul>
      </li><!-- End Banner -->    

	   <!-- Artigos -->
	   <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#artigos-nav" data-bs-toggle="collapse" href="#">
          <i class="bicomm bi-newspaper"></i><span>Artigos</span><i class="bi bi-chevron-down ms-auto"></i></a>
        <ul id="artigos-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li><a href="administrativo.php?link=55"><i class="bi bi-circle"></i><span>Listar Artigos</span></a></li>
          <li><a href="administrativo.php?link=50"><i class="bi bi-circle"></i><span>Categoria do Artigo</span></a></li>
		  <li><a href="administrativo.php?link=51"><i class="bi bi-circle"></i><span>Situação do Artigo</span></a></li>
        </ul>
      </li><!-- End Artigos --> 

	   <!-- Comentários -->
	   <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#comentarios-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-chat-text"></i><span>Comentários</span><i class="bi bi-chevron-down ms-auto"></i></a>
        <ul id="comentarios-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li><a href="administrativo.php?link=59"><i class="bi bi-circle"></i><span>Listar Comentários</span></a></li>
          <li><a href="administrativo.php?link=79"><i class="bi bi-circle"></i><span>Situação do Comentário</span></a></li>
        </ul>
      </li><!-- End Comentários -->     
   	  
      <!-- Mensagens -->
	  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#mensagens-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-chat-left-text"></i><span>Mensagens</span><i class="bi bi-chevron-down ms-auto"></i></a>
        <ul id="mensagens-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li><a href="administrativo.php?link=63"><i class="bi bi-circle"></i><span>Mensagens de Contato</span></a></li>
          <li><a href="administrativo.php?link=75"><i class="bi bi-circle"></i><span>Situação da Mensagem</span></a></li>
        </ul>
      </li><!-- End Mensagens -->     

      <!-- Usuários -->
	  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#usuarios-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Usuários</span><i class="bi bi-chevron-down ms-auto"></i></a>
        <ul id="usuarios-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li><a href="administrativo.php?link=2"><i class="bi bi-circle"></i><span>Listar Usuários</span></a></li>
          <li><a href="administrativo.php?link=6"><i class="bi bi-circle"></i><span>Nível de Acesso</span></a></li>
          <li><a href="administrativo.php?link=10"><i class="bi bi-circle"></i><span>Situação Usuário</span></a></li>
        </ul>
      </li><!-- End Usuários -->



     

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      <strong><span>VAS Segurança</span> | Todos os Direitos Reservados &copy; ➠ <?php echo date("d-m-Y"); ?> </strong>
    </div>
    <div class="credits">
      Desenvolvido por <b><a href="https://www.epoweb.com.br" target="_blank" title="EPOWEB Soluções em Tecnologias">EPOWEB Soluções em Tecnologias</a></b>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  	<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/docs.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/ie10-viewport-bug-workaround.js"></script>
		<script type="text/javascript" src="js/modal.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

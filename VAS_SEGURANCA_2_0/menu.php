<!-- Inicio Menu -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- <a class="navbar-brand" href="<?php echo pg.'/home'; ?>">Celke</a>-->
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav justify-content-center">
				<li><a href="<?php echo pg.'/home'; ?>">HOME</a></li>
				<li><a href="<?php echo pg.'/servicos'; ?>">SERVIÇOS</a></li>
				<li><a href="<?php echo pg.'/planos'; ?>">Planos</a></li>
				<li><a class="navbar-brand" href="<?php echo pg.'/home'; ?>"><img src="imagens/vas-logo-oficial.png" width="170px"></a></li>
				<li><a href="<?php echo pg.'/blog'; ?>">Blog</a></li>
				<li><a href="<?php echo pg.'/contato'; ?>">COTAÇÃO</a></li>
				<li><a href="<?php echo pg.'/contato'; ?>">CONTATO</a></li>
				<?php
					if(isset($_SESSION['usuarioId'])){
						
					}else{ ?>
						<li><a href="<?php echo pg.'/eadmin/index.php'; ?>">Login</a></li><?php
					}
				?>
				
				<?php
					/**
					if(isset($_SESSION['usuarioId'])){ ?>
						<li><a href="<?php echo pg.'/eadmin/cliente.php?link=1'; ?>" target="_blank"><button type="submit" class="btn btn-danger" >Minha Conta</button></a></li><?php
						
					}else{ ?>						
						<li><a href="<?php echo pg.'/cadastro_email/free'; ?>"><button type="submit" class="btn btn-danger">Cadastre-se grátis</button></a></li><?php
					}
					 */
				?>
			</ul>
		</div>
	</div>
</nav>
<!-- Fim Menu -->
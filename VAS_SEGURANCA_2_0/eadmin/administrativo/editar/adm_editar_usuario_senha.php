<?php
	if(!empty($_GET['id'])){
		$id = $_GET['id'];
		//Buscar os dados referente ao usuario situado neste id
		$result_usuario = "SELECT * FROM usuarios WHERE id = '$id' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$row_usuario = mysqli_fetch_assoc($resultado_usuario);	
	}
	
?>
<main id="main" class="main" style="margin-top:-15px">
<div class="card">
	<div class="pagetitle" style="padding: 10px">
		<h1>Editar Senha Usuário</h1>
		<nav>
			<ol class="breadcrumb">
			<li class="breadcrumb-item">Home</li>
			<li class="breadcrumb-item active">Usuários</li>
			<li class="breadcrumb-item active">Editar Senha Usuário</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->
	
	<div class="card-body">
		<div class="row espaco">
			<div class="pull-right">
				<a href="administrativo.php?link=2"><button type='button' class='btn btn-sm btn-success' style="font-size:14px">Listar</button></a>
			</div>
		</div>	
		<form class="form-horizontal" method="POST" action="administrativo/processa/adm_proc_edita_usuario_senha.php" enctype="multipart/form-data">
		
			<div class="form-group">
				<label class="col-sm-2 control-label" style="font-size:14px">Senha</label>
				<div class="col-sm-10">
					<input type="password" name="senha" class="form-control" id="inputPassword3" placeholder="Senha" value="" required  style="font-size:14px" 
					<?php
						if(!empty($_SESSION['value_senha'])){
							echo "value='".$_SESSION['value_senha']."'";
							unset($_SESSION['value_senha']);
						}
						if(!empty($row_usuario['senha'])){
							echo "value=''";
						}
					?>
					>
					<?php 
						if(!empty($_SESSION['usuario_senha_vazio'])){
							echo "<p style='color: #ff0000; '>".$_SESSION['usuario_senha_vazio']."</p>";
							unset($_SESSION['usuario_senha_vazio']);
						}
					?> 
				</div>
			</div>	
			
			<input type="hidden" name="id" 
				<?php
					if(!empty($_SESSION['value_id'])){
						echo "value='".$_SESSION['value_id']."'";
						unset($_SESSION['value_id']);
					}
					if(!empty($row_usuario['id'])){
						echo "value='".$row_usuario['id']."'";
					}
				?>>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" class="btn btn-success" value="Editar" style="font-size:14px">
				</div>
			</div>
		</form>
	</div>
</div>

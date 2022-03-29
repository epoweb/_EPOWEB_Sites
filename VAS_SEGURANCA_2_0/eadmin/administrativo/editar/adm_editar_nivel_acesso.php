<?php
	if(!empty($_GET['id'])){
		$id = $_GET['id'];
		//Buscar os dados referente ao usuario situado neste id
		$result_niveis_acessos = "SELECT * FROM niveis_acessos WHERE id = '$id' LIMIT 1";
		$resultado_niveis_acessos = mysqli_query($conn, $result_niveis_acessos);
		$row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acessos);	
	}
?>
<main id="main" class="main" style="margin-top:-15px">
<div class="card">
	<div class="pagetitle" style="padding: 10px">
		<h1>Editar Nível Acesso</h1>
		<nav>
			<ol class="breadcrumb">
			<li class="breadcrumb-item">Home</li>
			<li class="breadcrumb-item active">Nível Acesso</li>
			<li class="breadcrumb-item active">Editar Nível Acesso</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->
	
	<div class="card-body">
		<div class="row espaco">
			<div class="pull-right">
				<a href="administrativo.php?link=6"><button type='button' class='btn btn-sm btn-success' style="font-size:14px">Cadastrar</button></a>
			</div>
		</div>	
		<form name="adm_cad_nivel_acesso" class="form-horizontal" method="POST" action="administrativo/processa/adm_proc_edita_nivel_acesso.php" enctype="multipart/form-data" style="font-size:14px">
			<div class="form-group">
				<label class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-10">
					<input type="text" name="nome" class="form-control" id="inputEmail3" style="font-size:14px" placeholder="Nome Completo" required
					<?php
						if(!empty($row_niveis_acessos['nome'])){
							echo "value='".$row_niveis_acessos['nome']."'";
						}
						if(!empty($_SESSION['value_nome'])){
							echo "value='".$_SESSION['value_nome']."'";
							unset($_SESSION['value_nome']);
						}
					?>					
					/>
					<?php 
						if(!empty($_SESSION['usuario_nome_vazio'])){
							echo "<p style='color: #ff0000; '>".$_SESSION['usuario_nome_vazio']."</p>";
							unset($_SESSION['usuario_nome_vazio']);
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
					if(!empty($row_niveis_acessos['id'])){
						echo "value='".$row_niveis_acessos['id']."'";
					}
				?>>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" class="btn btn-warning" value="Alterar" style="font-size:14px" onclick="return val_cad_nivel_acesso()">
				</div>
			</div>
		</form>
	</div>
</div>
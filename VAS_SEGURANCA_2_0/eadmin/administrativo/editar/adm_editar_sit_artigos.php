<?php
	if(!empty($_GET['id'])){
		$id = $_GET['id'];
		//Buscar os dados referente ao usuario situado neste id
		$result_situacoes_artigos = "SELECT * FROM situacoes_artigos WHERE id = '$id' LIMIT 1";
		$resultado_situacoes_artigos = mysqli_query($conn, $result_situacoes_artigos);
		$row_situacoes_artigos = mysqli_fetch_assoc($resultado_situacoes_artigos);	
	}
?>

<main id="main" class="main" style="margin-top:-15px">
<div class="card">
	<div class="pagetitle" style="padding: 10px">
		<h1>Editar Situação para Artigos</h1>
		<nav>
			<ol class="breadcrumb">
			<li class="breadcrumb-item">Home</li>
			<li class="breadcrumb-item active">Artigos</li>
			<li class="breadcrumb-item active">Editar Situação para Artigos</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->
	
	<div class="card-body">
		<div class="row espaco">
			<div class="pull-right">
				<a href="administrativo.php?link=51"><button type='button' class='btn btn-sm btn-success' style="font-size:14px">Listar</button></a>
			</div>
		</div>
		<form name="adm_cad_sit_artigos" class="form-horizontal" method="POST" action="administrativo/processa/adm_proc_edita_sit_artigos.php" enctype="multipart/form-data" style="font-size:14px">
			<div class="form-group">
				<label class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-10">
					<input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome" required style="font-size:14px"
					<?php
						if(!empty($row_situacoes_artigos['nome'])){
							echo "value='".$row_situacoes_artigos['nome']."'";
						}
						if(!empty($_SESSION['value_nome'])){
							echo "value='".$_SESSION['value_nome']."'";
							unset($_SESSION['value_nome']);
						}
					?>					
					/>
					<?php 
						if(!empty($_SESSION['nome_sit_artigo_vazio'])){
							echo "<p style='color: #ff0000; '>".$_SESSION['nome_sit_artigo_vazio']."</p>";
							unset($_SESSION['nome_sit_artigo_vazio']);
						}
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Cor</label>
				<div class="col-sm-10" >
					<select class="form-control" name="cor" style="font-size:14px">
						<option value="">Selecione</option>
						<option value='default'
							<?php
							if(!empty($_SESSION['value_cor'])){
								if($_SESSION['value_cor'] == "default"){
									echo 'selected';
									unset($_SESSION['value_cor']);
								}
							}
							if(!empty($row_situacoes_artigos['cor'])){
								if($row_situacoes_artigos['cor'] == "default"){
									echo 'selected';
								}
							} 
							?>
						>Cinza</option>
						<option value='primary'
							<?php
							if(!empty($_SESSION['value_cor'])){
								if($_SESSION['value_cor'] == "primary"){
									echo 'selected';
									unset($_SESSION['value_cor']);
								}
							}
							if(!empty($row_situacoes_artigos['cor'])){
								if($row_situacoes_artigos['cor'] == "primary"){
									echo 'selected';
								}
							} ?>
						>Azul escuro</option>
						<option value='success'
							<?php
							if(!empty($_SESSION['value_cor'])){
								if($_SESSION['value_cor'] == "success"){
									echo 'selected';
									unset($_SESSION['value_cor']);
								}
							}
							if(!empty($row_situacoes_artigos['cor'])){
								if($row_situacoes_artigos['cor'] == "success"){
									echo 'selected';
								}
							} ?>
						>Verde</option>
						<option value='info'
							<?php
							if(!empty($_SESSION['value_cor'])){
								if($_SESSION['value_cor'] == "info"){
									echo 'selected';
									unset($_SESSION['value_cor']);
								}
							}
							if(!empty($row_situacoes_artigos['cor'])){
								if($row_situacoes_artigos['cor'] == "info"){
									echo 'selected';
								}
							} ?>
						>Azul claro</option>
						<option value='warning'
							<?php
							if(!empty($_SESSION['value_cor'])){
								if($_SESSION['value_cor'] == "warning"){
									echo 'selected';
									unset($_SESSION['value_cor']);
								}
							}
							if(!empty($row_situacoes_artigos['cor'])){
								if($row_situacoes_artigos['cor'] == "warning"){
									echo 'selected';
								}
							} ?>
						>Laranjado</option>
						<option value='danger'
							<?php
							if(!empty($_SESSION['value_cor'])){
								if($_SESSION['value_cor'] == "danger"){
									echo 'selected';
									unset($_SESSION['value_cor']);
								}
							}
							if(!empty($row_situacoes_artigos['cor'])){
								if($row_situacoes_artigos['cor'] == "danger"){
									echo 'selected';
								}
							} ?>
						>Vermelho</option>
					</select>
					<?php 
						if(!empty($_SESSION['sit_cont_value_cor_vazio'])){
							echo "<p style='color: #ff0000; '>".$_SESSION['sit_cont_value_cor_vazio']."</p>";
							unset($_SESSION['sit_cont_value_cor_vazio']);
						}
					?> 
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Legenda da cores</label>
				<div class="col-sm-10">
					<span class="label label-default">Cinza</span>
					<span class="label label-primary">Azul escuro</span>
					<span class="label label-success">Verde</span>
					<span class="label label-info">Azul claro</span>
					<span class="label label-warning">Laranjado</span>
					<span class="label label-danger">Vermelho</span>
				</div>
			</div>
			
					
			<input type="hidden" name="id" 
				<?php
					if(!empty($_SESSION['value_id'])){
						echo "value='".$_SESSION['value_id']."'";
						unset($_SESSION['value_id']);
					}
					if(!empty($row_situacoes_artigos['id'])){
						echo "value='".$row_situacoes_artigos['id']."'";
					}
				?>>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" class="btn btn-warning" value="Editar" onclick="return val_adm_cad_sit_artigos()" style="font-size:14px">
				</div>
			</div>
		</form>
	</div>
</div>
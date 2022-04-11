<?php
	if(!empty($_GET['id'])){
		$id = $_GET['id'];
		//Buscar os dados referente ao usuario situado neste id
		$result_sit_comentario = "SELECT * FROM situacoes_comentarios WHERE id = '$id' LIMIT 1";
		$resultado_sit_comentario = mysqli_query($conn, $result_sit_comentario);
		$row_sit_comentario = mysqli_fetch_assoc($resultado_sit_comentario);	
	}
?>
<main id="main" class="main" style="margin-top:-15px">
<div class="card">
	<div class="pagetitle" style="padding: 10px">
		<h1>Editar Situação para Comentário Artigo</h1>
		<nav>
			<ol class="breadcrumb">
			<li class="breadcrumb-item">Home</li>
			<li class="breadcrumb-item active">Comentários</li>
			<li class="breadcrumb-item active">Editar Situação para Comentário Artigo</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->
	
	<div class="card-body">
		<div class="row espaco">
			<div class="pull-right">
				<a href="administrativo.php?link=79"><button type='button' class='btn btn-sm btn-success' style="font-size:14px">Listar</button></a>
			</div>
		</div>
		<form name="adm_cad_sit_comentario" class="form-horizontal" method="POST" action="administrativo/processa/adm_proc_edita_sit_comentario.php" enctype="multipart/form-data">
			<div class="form-group">
				<label class="col-sm-2 control-label" style="font-size:14px">Nome</label>
				<div class="col-sm-10">
					<input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome" required style="font-size:14px"
					<?php
						if(!empty($row_sit_comentario['nome'])){
							echo "value='".$row_sit_comentario['nome']."'";
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
			
			<div class="form-group" style="font-size:14px">
				<label class="col-sm-2 control-label">Cor</label>
				<div class="col-sm-10">
					<select class="form-control" name="cor" style="font-size:14px">
						<option value="" >Selecione</option>
						<option value='default' 
							<?php
							if(!empty($_SESSION['value_cor'])){
								if($_SESSION['value_cor'] == "default"){
									echo 'selected';
									unset($_SESSION['value_cor']);
								}
							}
							if(!empty($row_sit_comentario['cor'])){
								if($row_sit_comentario['cor'] == "default"){
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
							if(!empty($row_sit_comentario['cor'])){
								if($row_sit_comentario['cor'] == "primary"){
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
							if(!empty($row_sit_comentario['cor'])){
								if($row_sit_comentario['cor'] == "success"){
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
							if(!empty($row_sit_comentario['cor'])){
								if($row_sit_comentario['cor'] == "info"){
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
							if(!empty($row_sit_comentario['cor'])){
								if($row_sit_comentario['cor'] == "warning"){
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
							if(!empty($row_sit_comentario['cor'])){
								if($row_sit_comentario['cor'] == "danger"){
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
			
			<div class="form-group" style="font-size:14px">
				<label class="col-sm-2 control-label">Legenda da cores</label>
				<div class="col-sm-10" style="font-size:14px">
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
					if(!empty($row_sit_comentario['id'])){
						echo "value='".$row_sit_comentario['id']."'";
					}
				?>>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" class="btn btn-warning" value="Editar" onclick="return val_adm_cad_sit_comentario()" style="font-size:14px">
				</div>
			</div>
		</form>
	</div>
</div>
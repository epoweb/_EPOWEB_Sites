<?php
	if(!empty($_GET['id'])){
		$id = $_GET['id'];
		//Buscar os dados referente ao usuario situado neste id
		$result_artigos = "SELECT * FROM artigos WHERE id = '$id' LIMIT 1";
		$resultado_artigos = mysqli_query($conn, $result_artigos);
		$row_artigos = mysqli_fetch_assoc($resultado_artigos);	
	}
?>
<main id="main" class="main" style="margin-top:-15px">
<div class="card">
	<div class="pagetitle" style="padding: 10px">
		<h1>Editar Artigo</h1>
		<nav>
			<ol class="breadcrumb">
			<li class="breadcrumb-item">Home</li>
			<li class="breadcrumb-item active">Artigos</li>
			<li class="breadcrumb-item active">Editar Artigo</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->
	
	<div class="card-body">
		<div class="row espaco">
			<div class="pull-right">
				<a href="administrativo.php?link=55"><button type='button' class='btn btn-sm btn-success' style='font-size:14px'>Listar</button></a>
			</div>
		</div>
		<form name="adm_edi_artigos" class="form-horizontal" method="POST" action="administrativo/processa/adm_proc_edita_artigos.php" enctype="multipart/form-data" style="font-size:14px">
			<div class="form-group">
				<label class="col-sm-2 control-label">Titulo</label>
				<div class="col-sm-10">
					<input type="text" name="titulo" class="form-control" id="inputEmail3" placeholder="Titulo do artigo" style="font-size:14px"
					<?php
						if(!empty($row_artigos['titulo'])){
							echo "value='".$row_artigos['titulo']."'";
						}
						if(!empty($_SESSION['value_titulo'])){
							echo "value='".$_SESSION['value_titulo']."'";
							unset($_SESSION['value_titulo']);
						}
					?>					
					/>
					<?php 
						if(!empty($_SESSION['artigo_titulo_vazio'])){
							echo "<p style='color: #ff0000; '>".$_SESSION['artigo_titulo_vazio']."</p>";
							unset($_SESSION['artigo_titulo_vazio']);
						}
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Conteúdo</label>
					<div class="col-sm-10">	
							<?php
								if(!empty($_SESSION['value_conteudo'])){
									?> <div class='quill-editor-full' name="conteudo"><?php echo $_SESSION['value_conteudo']; ?></div><?php						
									unset($_SESSION['value_conteudo']);
								}elseif(!empty($row_artigos['conteudo'])){
									?> <div class='quill-editor-full' name="conteudo" style="font-size:14px"><?php echo $row_artigos['conteudo']; ?></div><?php
								}else{
									?> <div class='quill-editor-full' name="conteudo"></div><?php
								}
							?>					
							
							<?php 
								if(!empty($_SESSION['artigo_conteudo_vazio'])){
									echo "<p style='color: #ff0000; '>".$_SESSION['artigo_conteudo_vazio']."</p>";
									unset($_SESSION['artigo_conteudo_vazio']);
								}
							?> 
					</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Descriçao Curta</label>
				<div class="col-sm-10">
					<div class="quill-editor-full">
						
						<?php
							if(!empty($_SESSION['value_descricao'])){
								?> <div class='quill-editor-full' name="conteudo"><?php echo $_SESSION['value_descricao']; ?></div><?php						

								unset($_SESSION['value_descricao']);
							}elseif(!empty($row_artigos['descricao'])){
								?> <div class='quill-editor-full' name="descricao" class="form-control" rows="3" style="font-size:14px"><?php echo $row_artigos['descricao']; ?></div><?php
							}else{
								?> <div class='quill-editor-full' name="descricao"></div><?php
							}
						?>					
						
						<?php 
							if(!empty($_SESSION['artigo_descricao_vazio'])){
								echo "<p style='color: #ff0000; '>".$_SESSION['artigo_descricao_vazio']."</p>";
								unset($_SESSION['artigo_descricao_vazio']);
							}
						?> 
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Slug</label>
				<div class="col-sm-10">
					<input type="text" name="slug" class="form-control" id="inputEmail3" placeholder="Slug do artigo" style="font-size:14px"
					<?php
						if(!empty($row_artigos['slug'])){
							echo "value='".$row_artigos['slug']."'";
						}
						if(!empty($_SESSION['value_slug'])){
							echo "value='".$_SESSION['value_slug']."'";
							unset($_SESSION['value_slug']);
						}
					?>					
					/>
					<?php 
						if(!empty($_SESSION['artigo_slug_vazio'])){
							echo "<p style='color: #ff0000; '>".$_SESSION['artigo_slug_vazio']."</p>";
							unset($_SESSION['artigo_slug_vazio']);
						}
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Imagem Antiga: </label>
				<div class="col-sm-10">
					<?php
						if(!empty($row_artigos['imagem'])){
							?><img src="../foto/<?php echo $row_artigos['imagem']; ?>" width="150" height="150" style="font-size:14px">
							<input type="hidden" name="imagem_antiga" value="<?php echo $row_artigos['imagem']; ?>">
							<?php
						}
						elseif(!empty($_SESSION['value_imagem_antiga'])){
							?><img src="../foto/<?php echo $_SESSION['value_imagem_antiga']; ?>" width="150" height="150"><?php
							unset($_SESSION['value_imagem_antiga']);
						}else{}
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Imagem: </label>
				<div class="col-sm-10">
					<input type="file" name="imagem"/>
					<?php 
						if(!empty($_SESSION['artigo_imagem_vazio'])){
							echo "<p style='color: #ff0000; '>".$_SESSION['artigo_imagem_vazio']."</p>";
							unset($_SESSION['artigo_imagem_vazio']);
						}
					?> 
				</div>
			</div>
			
			<?php if(!empty($row_artigos['categorias_artigo_id'])){
				$categorias_artigo_id = $row_artigos['categorias_artigo_id']; 
			}?>
			<div class="form-group">
				<label class="col-sm-2 control-label">Categoria</label>
				<div class="col-sm-10">
					<select class="form-control" name="categorias_artigo_id" style="font-size:14px">
						<option value="">Selecione</option>
						<?php
						$result_cat_artigo = "SELECT * FROM categorias_artigos";
						$result_cat_artigo = mysqli_query($conn, $result_cat_artigo);
						while($row_cat_artigo = mysqli_fetch_assoc($result_cat_artigo)){ ?> 
							<option value="<?php echo $row_cat_artigo['id']; ?>"<?php
							if(!empty($_SESSION['value_cat_artigo_id'])){
								if($_SESSION['value_cat_artigo_id'] == $row_cat_artigo['id']){
									echo 'selected';
									unset($_SESSION['value_cat_artigo_id']);
								}
							}
							if(!empty($row_artigos['categorias_artigo_id'])){
								if($categorias_artigo_id == $row_cat_artigo['id']){
									echo 'selected';
								}
							}
							?> >						
							<?php echo $row_cat_artigo['nome']; ?></option>
						<?php } ?>
					</select>
					<?php 
						if(!empty($_SESSION['artigo_cat_artigos_vazio'])){
							echo "<p style='color: #ff0000; '>".$_SESSION['artigo_cat_artigos_vazio']."</p>";
							unset($_SESSION['artigo_cat_artigos_vazio']);
						}
					?> 
				</div>
			</div>	
			
			<?php if(!empty($row_artigos['situacoes_artigo_id'])){
				$situacoes_artigo_id = $row_artigos['situacoes_artigo_id']; 
			}?>
			<div class="form-group">
				<label class="col-sm-2 control-label">Situação</label>
				<div class="col-sm-10">
					<select class="form-control" name="situacoes_artigo_id" style="font-size:14px">
						<option value="">Selecione</option>
						<?php
						$result_sit_artigo = "SELECT * FROM situacoes_artigos";
						$result_sit_artigo = mysqli_query($conn, $result_sit_artigo);
						while($row_sit_artigo = mysqli_fetch_assoc($result_sit_artigo)){ ?> 
							<option value="<?php echo $row_sit_artigo['id']; ?>"<?php
							if(!empty($_SESSION['value_sit_artigo_id'])){
								if($_SESSION['value_sit_artigo_id'] == $row_sit_artigo['id']){
									echo 'selected';
									unset($_SESSION['value_sit_artigo_id']);
								}
							}
							if(!empty($row_artigos['situacoes_artigo_id'])){
								if($situacoes_artigo_id == $row_sit_artigo['id']){
									echo 'selected';
								}
							}
							?> >						
							<?php echo $row_sit_artigo['nome']; ?></option>
						<?php } ?>
					</select>
					<?php 
						if(!empty($_SESSION['artigo_sit_artigos_vazio'])){
							echo "<p style='color: #ff0000; '>".$_SESSION['artigo_sit_artigos_vazio']."</p>";
							unset($_SESSION['artigo_sit_artigos_vazio']);
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
					if(!empty($row_artigos['id'])){
						echo "value='".$row_artigos['id']."'";
					}
				?>>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" class="btn btn-warning" value="Alterar" onclick="return val_adm_edi_artigos()" style="font-size:14px">
				</div>
			</div>
		</form>
	</div>
</div>
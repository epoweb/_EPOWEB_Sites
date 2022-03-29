<?php
	if(!empty($_GET['id'])){
		$id = $_GET['id'];
		//Buscar os dados referente ao usuario situado neste id
		$result_carrouses = "SELECT * FROM carrouses WHERE id = '$id' LIMIT 1";
		$resultado_carrouses = mysqli_query($conn, $result_carrouses);
		$row_carrouses = mysqli_fetch_assoc($resultado_carrouses);	
	}
?>

<main id="main" class="main" style="margin-top:-15px">
<div class="card">
	<div class="pagetitle" style="padding: 10px">
		<h1>Editar Banner</h1>
		<nav>
			<ol class="breadcrumb">
			<li class="breadcrumb-item">Home</li>
			<li class="breadcrumb-item active">Banner</li>
			<li class="breadcrumb-item active">Editar Banner</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->

	<div class="card-body">
		<div class="row espaco">
			<div class="pull-right" style="padding-bottom: 5px; ">
				<a href="administrativo.php?link=67"><button type='button' class='btn btn-sm btn-info' style="font-size:14px">Listar</button></a>
			</div>
		</div>
		<form name="adm_edi_carrouses" class="form-horizontal" method="POST" action="administrativo/processa/adm_proc_edita_carrouses.php" enctype="multipart/form-data" style="font-size:14px">
			<div class="form-group" >
				<label class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-10">
					<input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome" style="font-size:14px"
					<?php
						if(!empty($row_carrouses['nome'])){
							echo "value='".$row_carrouses['nome']."'";
						}
						if(!empty($_SESSION['value_nome'])){
							echo "value='".$_SESSION['value_nome']."'";
							unset($_SESSION['value_nome']);
						}
					?>					
					/>
					<?php 
						if(!empty($_SESSION['carrousel_nome_vazio'])){
							echo "<p style='color: #ff0000; '>".$_SESSION['carrousel_nome_vazio']."</p>";
							unset($_SESSION['carrousel_nome_vazio']);
						}
					?>
				</div>
			</div>
					
			<div class="form-group">
				<label class="col-sm-2 control-label">Imagem Antiga: </label>
				<div class="col-sm-10">
					<?php
						if(!empty($row_carrouses['imagem'])){
							?><img src="../carrousel/<?php echo $row_carrouses['imagem']; ?>" width="300" height="150" style="border-radius:6px">
							<input type="hidden" name="imagem_antiga" value="<?php echo $row_carrouses['imagem']; ?>">
							<?php
						}
						elseif(!empty($_SESSION['value_imagem_antiga'])){
							?><img src="../carrousel/<?php echo $_SESSION['value_imagem_antiga']; ?>" width="300" height="150" style="border-radius:6px"><?php
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
						if(!empty($_SESSION['carrousel_imagem_vazio'])){
							echo "<p style='color: #ff0000; '>".$_SESSION['carrousel_imagem_vazio']."</p>";
							unset($_SESSION['carrousel_imagem_vazio']);
						}
					?> 
				</div>
			</div>
			
			<?php if(!empty($row_carrouses['situacoes_carrouse_id'])){
				$situacoes_carrouse_id = $row_carrouses['situacoes_carrouse_id']; 
			}?>
			<div class="form-group">
				<label class="col-sm-2 control-label">Situação</label>
				<div class="col-sm-10">
					<select class="form-control" name="situacoes_carrouse_id" style="font-size:14px">
						<option value="">Selecione</option>
						<?php
						$result_sit_carrouses = "SELECT * FROM situacoes_carrouses";
						$result_sit_carrouses = mysqli_query($conn, $result_sit_carrouses);
						while($row_sit_carrouses = mysqli_fetch_assoc($result_sit_carrouses)){ ?> 
							<option value="<?php echo $row_sit_carrouses['id']; ?>"<?php
							if(!empty($_SESSION['value_sit_carrouses_id'])){
								if($_SESSION['value_sit_carrouses_id'] == $row_sit_carrouses['id']){
									echo 'selected';
									unset($_SESSION['value_sit_carrouses_id']);
								}
							}
							if(!empty($row_carrouses['situacoes_carrouse_id'])){
								if($situacoes_carrouse_id == $row_sit_carrouses['id']){
									echo 'selected';
								}
							}
							?> >						
							<?php echo $row_sit_carrouses['nome']; ?></option>
						<?php } ?>
					</select>
					<?php 
						if(!empty($_SESSION['carrousel_sit_vazio'])){
							echo "<p style='color: #ff0000; '>".$_SESSION['carrousel_sit_vazio']."</p>";
							unset($_SESSION['carrousel_sit_vazio']);
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
					if(!empty($row_carrouses['id'])){
						echo "value='".$row_carrouses['id']."'";
					}
				?>>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" class="btn btn-warning" value="Alterar" style="font-size:14px" onclick="return val_adm_edi_carrouses()">
				</div>
			</div>
		</form>
	</div>
</div>
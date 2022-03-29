<main id="main" class="main" style="margin-top:-15px">
<div class="card">
	<div class="pagetitle" style="padding: 10px">
		<h1>Cadastrar Banner</h1>
		<nav>
			<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="administrativo.php?link=6">Home</a></li>
			<li class="breadcrumb-item active"><a href="administrativo.php?link=67">Banners</a></li>
			<li class="breadcrumb-item active">Cadastrar Banner</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->

	<div class="card-body">
		<div class="row espaco">
			<div class="pull-right" style="padding-bottom: 5px; ">
				<a href="administrativo.php?link=67"><button type='button' class='btn btn-sm btn-info' style="font-size:14px">Listar</button></a>
			</div>
		</div>
			
		<!-- Horizontal Form -->
		<form name="adm_cad_carrousel" class="form-horizontal" method="POST" action="administrativo/processa/adm_proc_cad_carrousel.php" enctype="multipart/form-data">
			<div class="form-group">
				<label class="col-sm-2 control-label" style="font-size:14px">Nome Banner</label>
				<div class="col-sm-10">
					<input type="text" name="nome" class="form-control" style="font-size:14px" id="inputEmail3" placeholder="Nome Banner" required
					<?php
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
				<label class="col-sm-2 control-label" style="font-size:14px">Imagem: </label>
				<div class="col-sm-10">
					<input type="file" style="font-size:14px" name="imagem"/>
					<?php 
						if(!empty($_SESSION['carrousel_imagem_vazio'])){
							echo "<p style='color: #ff0000; '>".$_SESSION['carrousel_imagem_vazio']."</p>";
							unset($_SESSION['carrousel_imagem_vazio']);
						}
					?> 
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label" style="font-size:14px">Situação</label>
				<div class="col-sm-10">
					<select class="form-control" name="situacoes_carrouse_id" style="font-size:14px">
						<option value="" >Selecione</option>
						<?php
						$result_sit_carrouses = "SELECT * FROM situacoes_carrouses";
						$result_sit_carrouses = mysqli_query($conn, $result_sit_carrouses);
						while($row_sit_carrouses = mysqli_fetch_assoc($result_sit_carrouses)){ ?> 
							<option value="<?php echo $row_sit_carrouses['id']; ?>"
							
							<?php
							if(!empty($_SESSION['value_sit_carrousel_id'])){
								if($_SESSION['value_sit_artigo_id'] == $row_sit_carrouses['id']){
									echo 'selected';
									unset($_SESSION['value_sit_carrousel_id']);
								}
							}
							?>						
							><?php echo $row_sit_carrouses['nome']; ?> </option>
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
			
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" class="btn btn-success" value="Cadastrar" style="font-size:14px" onclick="return val_adm_cad_carrousel()">
				</div>
			</div>
		</form>
	</div>	
</div>
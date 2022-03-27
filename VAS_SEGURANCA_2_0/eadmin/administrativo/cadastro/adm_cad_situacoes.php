<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Cadastrar Situação para Usuário</h1>
	</div>
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">
			<a href="administrativo.php?link=10"><button type='button' class='btn btn-sm btn-success'>Listar</button></a>
		</div>
	</div>
	<form name="adm_cad_situacoes" class="form-horizontal" method="POST" action="administrativo/processa/adm_proc_cad_situacoes.php" enctype="multipart/form-data">
		<div class="form-group">
			<label class="col-sm-2 control-label">Nome da situação</label>
			<div class="col-sm-10">
				<input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome da Situação" required
				<?php
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
		
		<div class="form-group">
			<label class="col-sm-2 control-label">Cor</label>
			<div class="col-sm-10">
				<select class="form-control" name="cor">
					<option value="">Selecione</option>					
					<option value='default'
						<?php
						if(!empty($_SESSION['value_cor'])){
							if($_SESSION['value_cor'] == "default"){
								echo 'selected';
								unset($_SESSION['value_cor']);
							}
						} ?>
					>Cinza</option>
					<option value='primary'
						<?php
						if(!empty($_SESSION['value_cor'])){
							if($_SESSION['value_cor'] == "primary"){
								echo 'selected';
								unset($_SESSION['value_cor']);
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
						} ?>
					>Verde</option>
					<option value='info'
						<?php
						if(!empty($_SESSION['value_cor'])){
							if($_SESSION['value_cor'] == "info"){
								echo 'selected';
								unset($_SESSION['value_cor']);
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
						} ?>
					>Laranjado</option>
					<option value='danger'
						<?php
						if(!empty($_SESSION['value_cor'])){
							if($_SESSION['value_cor'] == "danger"){
								echo 'selected';
								unset($_SESSION['value_cor']);
							}
						} ?>
					>Vermelho</option>
				</select>
				<?php 
					if(!empty($_SESSION['sit_usuario_value_cor_vazio'])){
						echo "<p style='color: #ff0000; '>".$_SESSION['sit_usuario_value_cor_vazio']."</p>";
						unset($_SESSION['sit_usuario_value_cor_vazio']);
					}
				?> 
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label">Legenda das cores</label>
			<div class="col-sm-10">
				<span class="label label-default">Cinza</span>
				<span class="label label-primary">Azul escuro</span>
				<span class="label label-success">Verde</span>
				<span class="label label-info">Azul claro</span>
				<span class="label label-warning">Laranjado</span>
				<span class="label label-danger">Vermelho</span>
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="btn btn-success" value="Cadastrar" onclick="return val_adm_cad_situacoes()">
			</div>
		</div>
	</form>
</div>
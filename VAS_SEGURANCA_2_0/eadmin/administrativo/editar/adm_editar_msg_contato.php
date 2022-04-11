<?php
	if(!empty($_GET['id'])){
		$id = $_GET['id'];
		//Buscar os dados referente ao usuario situado neste id
		$result_msg_contato = "SELECT * FROM mensagens_contatos WHERE id = '$id' LIMIT 1";
		$resultado_msg_contato = mysqli_query($conn, $result_msg_contato);
		$row_msg_contato = mysqli_fetch_assoc($resultado_msg_contato);	
	}
?>
<main id="main" class="main" style="margin-top:-15px">
<div class="card">
	<div class="pagetitle" style="padding: 10px">
		<h1>Editar Mensagem de Contato</h1>
		<nav>
			<ol class="breadcrumb">
			<li class="breadcrumb-item">Home</li>
			<li class="breadcrumb-item active">Mensagens</li>
			<li class="breadcrumb-item active">Editar Mensagem de Contato</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->
	
	<div class="card-body">
		<div class="row espaco">
			<div class="pull-right">
				<a href="administrativo.php?link=63"><button type='button' class='btn btn-sm btn-success' style="font-size:14px">Listar</button></a>
			</div>
		</div>
		<form name="adm_cad_msg_contato" class="form-horizontal" method="POST" action="administrativo/processa/adm_proc_edita_msg_contato.php" enctype="multipart/form-data" style="font-size:14px">
			<div class="form-group">
				<label class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-10">
					<input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome Completo" required style="font-size:14px"
					<?php
						if(!empty($row_msg_contato['nome'])){
							echo "value='".$row_msg_contato['nome']."'";
						}
						if(!empty($_SESSION['value_nome'])){
							echo "value='".$_SESSION['value_nome']."'";
							unset($_SESSION['value_nome']);
						}
					?>					
					/>
					<?php 
						if(!empty($_SESSION['msg_contato_nome_vazio'])){
							echo "<p style='color: #ff0000; '>".$_SESSION['msg_contato_nome_vazio']."</p>";
							unset($_SESSION['msg_contato_nome_vazio']);
						}
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">E-mail</label>
				<div class="col-sm-10">
					<input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required style="font-size:14px"
					<?php
						if(!empty($row_msg_contato['email'])){
							echo "value='".$row_msg_contato['email']."'";
						}
						if(!empty($_SESSION['value_email'])){
							echo "value='".$_SESSION['value_email']."'";
							unset($_SESSION['value_email']);
						}
					?>					
					/>
					<?php 
						if(!empty($_SESSION['msg_contato_email_vazio'])){
							echo "<p style='color: #ff0000; '>".$_SESSION['msg_contato_email_vazio']."</p>";
							unset($_SESSION['msg_contato_email_vazio']);
						}
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Telefone</label>
				<div class="col-sm-10">
					<input type="text" name="telefone" class="form-control" id="inputEmail3" placeholder="Telefone" required style="font-size:14px"
					<?php
						if(!empty($row_msg_contato['telefone'])){
							echo "value='".$row_msg_contato['telefone']."'";
						}
						if(!empty($_SESSION['value_telefone'])){
							echo "value='".$_SESSION['value_telefone']."'";
							unset($_SESSION['value_telefone']);
						}
					?>					
					/>
					<?php 
						if(!empty($_SESSION['msg_contato_telefone_vazio'])){
							echo "<p style='color: #ff0000; '>".$_SESSION['msg_contato_telefone_vazio']."</p>";
							unset($_SESSION['msg_contato_telefone_vazio']);
						}
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Assunto</label>
				<div class="col-sm-10">
					<input type="text" name="assunto" class="form-control" id="inputEmail3" placeholder="Assunto" required style="font-size:14px"
					<?php
						if(!empty($row_msg_contato['assunto'])){
							echo "value='".$row_msg_contato['assunto']."'";
						}
						if(!empty($_SESSION['value_assunto'])){
							echo "value='".$_SESSION['value_assunto']."'";
							unset($_SESSION['value_assunto']);
						}
					?>					
					/>
					<?php 
						if(!empty($_SESSION['msg_contato_assunto_vazio'])){
							echo "<p style='color: #ff0000; '>".$_SESSION['msg_contato_assunto_vazio']."</p>";
							unset($_SESSION['msg_contato_assunto_vazio']);
						}
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Mensagem</label>
				<div class="col-sm-10">
					
					<?php
						if(!empty($_SESSION['value_mensagem'])){
							?> <textarea name="mensagem" class="form-control" rows="3"><?php echo $_SESSION['value_mensagem']; ?></textarea> <?php						
							unset($_SESSION['value_mensagem']);
						}elseif(!empty($row_msg_contato['mensagem'])){
							?> <textarea name="mensagem" class="form-control" rows="3" style="font-size:14px"><?php echo $row_msg_contato['mensagem']; ?>
							</textarea> <?php
						}else{
							?> <textarea name="mensagem" class="form-control" rows="3"></textarea> <?php
						}
					?>					
					
					<?php 
						if(!empty($_SESSION['msg_contato_msg_vazio'])){
							echo "<p style='color: #ff0000; '>".$_SESSION['msg_contato_msg_vazio']."</p>";
							unset($_SESSION['msg_contato_msg_vazio']);
						}
					?> 
				</div>
			</div>
			
			<?php if(!empty($row_msg_contato['situacoes_contato_id'])){
				$situacoes_contato_id = $row_msg_contato['situacoes_contato_id']; 
			}?>
			<div class="form-group">
				<label class="col-sm-2 control-label">Situação</label>
				<div class="col-sm-10">
					<select class="form-control" name="situacoes_contato_id" style="font-size:14px">
						<option value="">Selecione</option>
						<?php
						$result_sit_contato = "SELECT * FROM situacoes_contatos";
						$result_sit_contato = mysqli_query($conn, $result_sit_contato);
						while($row_sit_contato = mysqli_fetch_assoc($result_sit_contato)){ ?> 
							<option value="<?php echo $row_sit_contato['id']; ?>"<?php
							if(!empty($_SESSION['value_sit_artigo_id'])){
								if($_SESSION['value_sit_artigo_id'] == $row_sit_contato['id']){
									echo 'selected';
									unset($_SESSION['value_sit_artigo_id']);
								}
							}
							if(!empty($row_msg_contato['situacoes_contato_id'])){
								if($situacoes_contato_id == $row_sit_contato['id']){
									echo 'selected';
								}
							}
							?> >						
							<?php echo $row_sit_contato['nome']; ?></option>
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
					if(!empty($row_msg_contato['id'])){
						echo "value='".$row_msg_contato['id']."'";
					}
				?>>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" class="btn btn-warning" value="Alterar" onclick="return val_cad_msg_contato()" style="font-size:14px">
				</div>
			</div>
		</form>
	</div>
</div>
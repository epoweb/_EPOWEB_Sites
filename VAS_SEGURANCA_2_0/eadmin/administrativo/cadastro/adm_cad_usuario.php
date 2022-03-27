<main id="main" class="main" style="margin-top:-15px">
<div class="card">
	<div class="pagetitle" style="padding: 10px">
		<h1>Cadastrar Usuário</h1>
		<nav>
			<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.html">Home</a></li>
			<li class="breadcrumb-item active">Usuários</li>
			<li class="breadcrumb-item active">Cadastrar Usuário</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->

	<div class="card-body">
		<div class="row espaco">
			<div class="pull-right" style="padding-bottom: 5px; ">
				<a href="administrativo.php?link=2"><button type='button' class='btn btn-sm btn-info' style="font-size:14px">Listar</button></a>
			</div>
		</div>
			
		 <!-- Horizontal Form -->
			<form name="adm_cad_usuario" method="POST" action="administrativo/processa/adm_proc_cad_usuario.php" enctype="multipart/form-data" style="font-size:14px">
                
				<!--Nome-->
				<div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
					<div class="col-sm-10">
						<input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome Completo" required
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

				<!--E-mail-->
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail</label>
					<div class="col-sm-10">
							<input type="email" name="email" class="form-control" id="inputEmail3" placeholder="E-mail" required
								<?php
									if(!empty($_SESSION['value_email'])){
										echo "value='".$_SESSION['value_email']."'";
										unset($_SESSION['value_email']);
									}
								?>
								>
								<?php 
									if(!empty($_SESSION['usuario_email_vazio'])){
										echo "<p style='color: #ff0000; '>".$_SESSION['usuario_email_vazio']."</p>";
										unset($_SESSION['usuario_email_vazio']);
									}
								?> 
					</div>
                </div>
							
				<!--Senha-->
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
					<div class="col-sm-10">
						<input type="password" name="senha" class="form-control" id="inputPassword3" placeholder="Senha" required 
								<?php
									if(!empty($_SESSION['value_senha'])){
										echo "value='".$_SESSION['value_senha']."'";
										unset($_SESSION['value_senha']);
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

				<!--Situação-->
				<div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Situação</label>
					<div class="col-sm-10">
						<select class="form-control" name="select_situacao">
							<option value="">Selecione</option>
							<?php
							$result_situacao = "SELECT * FROM situacoes";
							$result_situacao = mysqli_query($conn, $result_situacao);
							while($row_situacoes = mysqli_fetch_assoc($result_situacao)){ ?> 
								<option value="<?php echo $row_situacoes['id']; ?>"
								
								<?php
								if(!empty($_SESSION['value_select_situacao'])){
									if($_SESSION['value_select_situacao'] == $row_situacoes['id']){
										echo 'selected';
										unset($_SESSION['value_select_situacao']);
									}
								}
								?>
								
								><?php echo $row_situacoes['nome']; ?></option>
							<?php } ?>
						</select>
						<?php 
							if(!empty($_SESSION['usu_sel_situacao_vazio'])){
								echo "<p style='color: #ff0000; '>".$_SESSION['usu_sel_situacao_vazio']."</p>";
								unset($_SESSION['usu_sel_situacao_vazio']);
							}
						?> 
					</div>
				</div>

				<!--Nível de Acesso-->
				<div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Nível Acesso</label>
					<div class="col-sm-10">
						<select class="form-control" name="select_nivel_acesso">
							<option value="">Selecione</option>
								<?php
								$result_niveis_acessos = "SELECT * FROM niveis_acessos";
								$result_niveis_acessos = mysqli_query($conn, $result_niveis_acessos);
								while($row_niveis_acessos = mysqli_fetch_assoc($result_niveis_acessos)){ ?> 
									<option value="<?php echo $row_niveis_acessos['id']; ?>"
									
									<?php
									if(!empty($_SESSION['value_select_nivel_acesso'])){
										if($_SESSION['value_select_nivel_acesso'] == $row_niveis_acessos['id']){
											echo 'selected';
											unset($_SESSION['value_select_nivel_acesso']);
										}
									}
									?>
									><?php echo $row_niveis_acessos['nome']; ?>
							</option>
							<?php } ?>
					</select>
					<?php 
						if(!empty($_SESSION['usu_sel_nivel_aces_vazio'])){
							echo "<p style='color: #ff0000; '>".$_SESSION['usu_sel_nivel_aces_vazio']."</p>";
							unset($_SESSION['usu_sel_nivel_aces_vazio']);
						}
					?> 
					</div>
				</div>

                <div class="text-center">
				  <input type="submit" class="btn btn-success" value="Cadastrar" onclick="return val_adm_cad_usuario()">
                </div>

            </form><!-- End Horizontal Form -->
</div>
				
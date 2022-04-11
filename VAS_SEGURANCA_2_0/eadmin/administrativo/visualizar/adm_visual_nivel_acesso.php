<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_niveis_acessos = "SELECT * FROM niveis_acessos WHERE id = '$id' LIMIT 1";
	$resultado_niveis_acessos = mysqli_query($conn, $result_niveis_acessos);
	$row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acessos);	
?>
<main id="main" class="main" style="margin-top:-15px">
<div class="card">
	<div class="pagetitle" style="padding: 10px">
		<h1>Visualizar Nível Acesso Usuário</h1>
		<nav>
			<ol class="breadcrumb">
			<li class="breadcrumb-item">Home</li>
			<li class="breadcrumb-item active">Usuários</li>
			<li class="breadcrumb-item active">Visualizar Nível Acesso Usuário</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->
	
	<div class="card-body">
		<div class="row espaco">
			<div class="pull-right">
			<a href="administrativo.php?link=6"><button type='button' class='btn btn-sm btn-success' style='font-size:14px'>Listar</button></a>
			
			<a href="administrativo.php?link=8&id=<?php echo $row_niveis_acessos["id"]; ?>"><button type="button" class="btn btn-sm btn-warning" style="font-size:14px">Editar</button></a>
			
			<a href="administrativo/processa/adm_apagar_nivel_acesso.php?id=<?php echo $row_niveis_acessos["id"]; ?>"><button type="button" class="btn btn-sm btn-danger" style="font-size:14px">Apagar</button></a>
		</div>
		<dl class="dl-horizontal" style="font-size:14px">	
			<dt>Id: </dt>
			<dd><?php echo $row_niveis_acessos['id']; ?></dd>
			<dt>Nome: </dt>
			<dd><?php echo $row_niveis_acessos['nome']; ?></dd>
			<dt>Inserido: </dt>
			<dd><?php 
				if(isset($row_niveis_acessos['created'])){
					$inserido = $row_niveis_acessos['created'];
					echo date('d/m/Y H:i:s', strtotime($inserido)); 
				}?>
			</dd>
			<dt>Alterado: </dt>
			<dd><?php 
				if(isset($row_niveis_acessos['modified'])){				
					echo date('d/m/Y H:i:s',strtotime($row_niveis_acessos['modified'])); 
				} ?>
			</dd>
		</dl>
	</div>
</div>
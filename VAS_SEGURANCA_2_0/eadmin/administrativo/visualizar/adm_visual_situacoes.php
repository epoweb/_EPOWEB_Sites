<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_situacoes = "SELECT * FROM situacoes WHERE id = '$id' LIMIT 1";
	$resultado_situacoes = mysqli_query($conn, $result_situacoes);
	$row_situacoes = mysqli_fetch_assoc($resultado_situacoes);	
?>
<main id="main" class="main" style="margin-top:-15px">
<div class="card">
	<div class="pagetitle" style="padding: 10px">
		<h1>Visualizar Situação</h1>
		<nav>
			<ol class="breadcrumb">
			<li class="breadcrumb-item">Home</li>
			<li class="breadcrumb-item active">Usuários</li>
			<li class="breadcrumb-item active">Visualizar Situação</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->
	
	<div class="card-body">
		<div class="row espaco">
			<div class="pull-right">
				<a href="administrativo.php?link=10"><button type='button' class='btn btn-sm btn-success' style='font-size:14px'>Listar</button></a>
				
				<a href="administrativo.php?link=12&id=<?php echo $row_situacoes["id"]; ?>"><button type="button" class="btn btn-sm btn-warning" style="font-size:14px">Editar</button></a>
				
				<a href="administrativo/processa/adm_apagar_situacoes.php?id=<?php echo $row_situacoes["id"]; ?>"><button type="button" class="btn btn-sm btn-danger" style="font-size:14px">Apagar</button>
				</a>
			</div>
		</div>
		<dl class="dl-horizontal" style="font-size:14px">
			<dt>Id: </dt>
			<dd><?php echo $row_situacoes['id']; ?></dd>
			<dt>Nome: </dt>
			<dd><?php echo $row_situacoes['nome']; ?></dd>
			<dt>Inserido: </dt>
			<dd><?php 
				if(isset($row_situacoes['created'])){
					$inserido = $row_situacoes['created'];
					echo date('d/m/Y H:i:s', strtotime($inserido)); 
				}?>
			</dd>
			<dt>Alterado: </dt>
			<dd><?php 
				if(isset($row_situacoes['modified'])){				
					echo date('d/m/Y H:i:s',strtotime($row_situacoes['modified'])); 
				} ?>
			</dd>
		</dl>
	</div>
</div>
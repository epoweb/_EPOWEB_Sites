<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_sit_carrouses = "SELECT * FROM situacoes_carrouses WHERE id = '$id' LIMIT 1";
	$resultado_sit_carrouses = mysqli_query($conn, $result_sit_carrouses);
	$row_sit_carrouses = mysqli_fetch_assoc($resultado_sit_carrouses);	
?>
<main id="main" class="main" style="margin-top:-15px">
<div class="card">
	<div class="pagetitle" style="padding: 10px">
		<h1>Visualizar Situação Banner</h1>
		<nav>
			<ol class="breadcrumb">
			<li class="breadcrumb-item">Home</li>
			<li class="breadcrumb-item active">Banners</li>
			<li class="breadcrumb-item active">Visualizar Situação Banner</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->
	
	<div class="card-body">
		<div class="row espaco">
			<div class="pull-right">
				<a href="administrativo.php?link=71"><button type='button' class='btn btn-sm btn-success' style="font-size:14px">Listar</button></a>
				<a href="administrativo.php?link=74&id=<?php echo $row_sit_carrouses["id"]; ?>"><button type="button" class="btn btn-sm btn-warning" style="font-size:14px">Editar</button></a>
				<a href="administrativo/processa/adm_apagar_sit_carrouses.php?id=<?php echo $row_sit_carrouses["id"]; ?>"><button type="button" class="btn btn-sm btn-danger" style="font-size:14px">Apagar</button></a>
			</div>
		</div>	
		<dl class="dl-horizontal" style="font-size:14px">
			<dt>Id: </dt>
			<dd><?php echo $row_sit_carrouses['id']; ?></dd>
			<dt>Nome: </dt>
			<dd><?php echo $row_sit_carrouses['nome']; ?></dd>
			<dt>Cor: </dt>
			<dd>
				<span class="label label-<?php echo $row_sit_carrouses['cor']; ?>"><?php echo $row_sit_carrouses['nome']; ?></span>
			</dd>
			<dt>Inserido: </dt>
			<dd><?php 
				if(isset($row_sit_carrouses['created'])){
					$inserido = $row_sit_carrouses['created'];
					echo date('d/m/Y H:i:s', strtotime($inserido)); 
				}?>
			</dd>
			<dt>Alterado: </dt>
			<dd><?php 
				if(isset($row_sit_carrouses['modified'])){				
					echo date('d/m/Y H:i:s',strtotime($row_sit_carrouses['modified'])); 
				} ?>
			</dd>
		</dl>
	</div>
</div>
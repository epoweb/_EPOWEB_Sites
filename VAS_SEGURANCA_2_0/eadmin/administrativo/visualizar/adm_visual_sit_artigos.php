<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_situacoes_artigos = "SELECT * FROM situacoes_artigos WHERE id = '$id' LIMIT 1";
	$resultado_situacoes_artigos = mysqli_query($conn, $result_situacoes_artigos);
	$row_situacoes_artigos = mysqli_fetch_assoc($resultado_situacoes_artigos);	
?>
<main id="main" class="main" style="margin-top:-15px">
<div class="card">
	<div class="pagetitle" style="padding: 10px">
		<h1>Visualizar Situação para o Artigo</h1>
		<nav>
			<ol class="breadcrumb">
			<li class="breadcrumb-item">Home</li>
			<li class="breadcrumb-item active">Artigos</li>
			<li class="breadcrumb-item active">Visualizar Situação para o Artigo</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->
	
	<div class="card-body">
		<div class="row espaco">
			<div class="pull-right">
				<a href="administrativo.php?link=51"><button type='button' class='btn btn-sm btn-success' style="font-size:14px">Listar</button></a>
				<a href="administrativo.php?link=54&id=<?php echo $row_situacoes_artigos["id"]; ?>"><button type="button" class="btn btn-sm btn-warning" style="font-size:14px">Editar</button></a>
				<a href="administrativo/processa/adm_apagar_sit_artigos.php?id=<?php echo $row_situacoes_artigos["id"]; ?>"><button type="button" class="btn btn-sm btn-danger" style="font-size:14px">Apagar</button></a>
			</div>
		</div>
		<dl class="dl-horizontal" style="font-size: 14px">
			<dt>Id: </dt>
			<dd><?php echo $row_situacoes_artigos['id']; ?></dd>
			<dt>Nome: </dt>
			<dd><span class="label label-<?php echo $row_situacoes_artigos['cor']; ?>"><?php echo $row_situacoes_artigos['nome']; ?></span></dd>
			<dt>Inserido: </dt>
			<dd><?php 
				if(isset($row_situacoes_artigos['created'])){
					$inserido = $row_situacoes_artigos['created'];
					echo date('d/m/Y H:i:s', strtotime($inserido)); 
				}?>
			</dd>
			<dt>Alterado: </dt>
			<dd><?php 
				if(isset($row_situacoes_artigos['modified'])){				
					echo date('d/m/Y H:i:s',strtotime($row_situacoes_artigos['modified'])); 
				} ?>
			</dd>
		</dl>
	</div>
</div>
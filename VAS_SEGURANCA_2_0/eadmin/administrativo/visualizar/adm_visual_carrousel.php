<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_carrouses = "SELECT * FROM carrouses WHERE id = '$id' LIMIT 1";
	$resultado_carrouses = mysqli_query($conn, $result_carrouses);
	$row_carrouses = mysqli_fetch_assoc($resultado_carrouses);	
?>

<main id="main" class="main" style="margin-top:-15px">
<div class="card">
	<div class="pagetitle" style="padding: 10px">
		<h1>Visualizar Banner</h1>
		<nav>
			<ol class="breadcrumb">
			<li class="breadcrumb-item">Home</li>
			<li class="breadcrumb-item active">Banner</li>
			<li class="breadcrumb-item active">Visualizar Banner</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->

	<div class="card-body">
		<div class="row espaco">
			<div class="pull-right" style="padding-bottom: 5px; ">
				<a href="administrativo.php?link=67"><button type='button' class='btn btn-sm btn-info' style="font-size:14px">Listar</button></a>
				<a href="administrativo.php?link=8&id=<?php echo $row_carrouses["id"]; ?>"><button type="button" class="btn btn-sm btn-warning" style="font-size:14px">Editar</button></a>
				<a href="administrativo/processa/adm_apagar_carrouses.php?id=<?php echo $row_carrouses["id"]; ?>"><button type="button" class="btn btn-sm btn-danger" style="font-size:14px">Apagar</button></a>				
			</div>
		</div>
		<dl class="dl-horizontal" style="font-size:14px">	
			<dt>Id: </dt>
			<dd><?php echo $row_carrouses['id']; ?></dd>		
			<dt>Situação: </dt>
			<dd>
				<?php 
				$situacoes_carrouse_id = $row_carrouses['situacoes_carrouse_id'];
				$result_sit_carrouses = "SELECT * FROM situacoes_carrouses WHERE id = '$situacoes_carrouse_id'";
				$result_sit_carrouses = mysqli_query($conn, $result_sit_carrouses);
				$row_sit_carrouses = mysqli_fetch_assoc($result_sit_carrouses);
				?><span class="label label-<?php echo $row_sit_carrouses['cor']; ?>"><?php echo $row_sit_carrouses['nome']; ?></span>
			</dd>
			<dt>Nome: </dt>
			<dd><?php echo $row_carrouses['nome']; ?></dd>
			<dt>Ordem: </dt>
			<dd><?php echo $row_carrouses['ordem']; ?></dd>
			<dt>Imagem: </dt>
			<dd>
				<img src="../carrousel/<?php echo $row_carrouses['imagem']; ?>" width="300" height="150" style="border-radius:6px">
			</dd>
			<dt>Inserido: </dt>
			<dd><?php 
				if(isset($row_carrouses['created'])){
					$inserido = $row_carrouses['created'];
					echo date('d/m/Y H:i:s', strtotime($inserido)); 
				}?>
			</dd>
			<dt>Alterado: </dt>
			<dd><?php 
				if(isset($row_carrouses['modified'])){				
					echo date('d/m/Y H:i:s',strtotime($row_carrouses['modified'])); 
				} ?>
			</dd>
		</dl>

	</div>
</div>
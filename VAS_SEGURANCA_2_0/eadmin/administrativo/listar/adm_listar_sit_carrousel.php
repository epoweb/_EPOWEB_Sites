<?php
	//Verificar se esta sendo passado na URL a página atual, senão é atribuido a pagina
	$pagina=(isset($_GET['pagina'])) ? $_GET['pagina'] : 1;
	
	//Selecionar todos os itens da tabela 
	$result_sit_carrouse = "SELECT * FROM situacoes_carrouses";
	$resultado_sit_carrouse = mysqli_query($conn , $result_sit_carrouse);
	
	//Contar o total de itens
	$total_sit_carrouses = mysqli_num_rows($resultado_sit_carrouse);
	
	//Seta a quantidade de itens por página
	$quantidade_pg = 20;
	
	//calcular o número de páginas 
	$num_pagina = ceil($total_sit_carrouses/$quantidade_pg);
	
	//calcular o inicio da visualizao	
	$inicio = ($quantidade_pg*$pagina)-$quantidade_pg;
	
	//Selecionar  os itens da página
	$result_sit_carrouses = "SELECT * FROM situacoes_carrouses limit $inicio, $quantidade_pg";
	$resultado_sit_carrouses = mysqli_query($conn , $result_sit_carrouses);
	$total_sit_carrouses = mysqli_num_rows($resultado_sit_carrouses);
	
?>
<main id="main" class="main" style="margin-top:-15px">
<div class="card">
	<div class="pagetitle" style="padding: 10px">
		<h1>Listar Situação Banners</h1>
		<nav>
			<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.html">Home</a></li>
			<li class="breadcrumb-item active">Banners</li>
			<li class="breadcrumb-item active">Listar Situação Banners</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->

	<div class="card-body">
		<div class="row espaco">
			<div class="pull-right">
			<a href="administrativo.php?link=73"><button type='button' class='btn btn-sm btn-success' style='font-size:14px'>Cadastrar</button></a>
			</div>
		</div>	
	
		<!-- Table with hoverable rows -->
			<table class="table" style='font-size:14px'>
				<thead>
					<tr>
						<th class="text-center">Id</th>
						<th class="text-center">Situação</th>
						<th class="text-center">Inserido</th>
						<th class="text-center">Ação</th>
					</tr>
				</thead>
				<tbody>
					<?php while($row_sit_carrouses = mysqli_fetch_assoc($resultado_sit_carrouses)){?>
						<tr>
							<td class="text-center"><?php echo $row_sit_carrouses["id"]; ?></td>
							<td class="text-center"><span class="label label-<?php echo $row_sit_carrouses['cor']; ?>"><?php echo $row_sit_carrouses['nome']; ?></span></td>
							<td class="text-center"><?php echo date('d/m/Y H:i:s',strtotime($row_sit_carrouses["created"])); ?></td>
							<td class="text-center">
								<a href="administrativo.php?link=72&id=<?php echo $row_sit_carrouses["id"]; ?>">
									<button type="button" class="btn btn-xs btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" style="font-size:12px" data-bs-original-title="Visualizar">
										<i class="bi bi-eye"></i>
									</button>
								</a>
								<a href="administrativo.php?link=74&id=<?php echo $row_sit_carrouses["id"]; ?>">									
									<button type="button" class="btn btn-xs btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="" style="font-size:12px" data-bs-original-title="Editar">
										<i class="bi bi-pencil"></i>
									</button>
								</a>
								<a href="administrativo/processa/adm_apagar_sit_carrouses.php?id=<?php echo $row_sit_carrouses["id"]; ?>">
									<button type="button" class="btn btn-xs btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="" style="font-size:12px" data-bs-original-title="Apagar">
										<i class="bi bi-trash"></i>
									</button>	
								</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php
				//Verificar pagina anterior e posterior
				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;
			?>
		<nav class="text-center">
			<ul class="pagination">
				<li>
					<?php 
						if($pagina_anterior != 0){
							?><a href="administrativo.php?link=71&pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a><?php
						}else{
							?><span aria-hidden="true">&laquo;</span><?php
						}
					?>
				</li>
				<?php
					//Apresentar a paginação
					for($i = 1; $i < $num_pagina + 1; $i++){
						?>
							<li><a href="administrativo.php?link=71&pagina=<?php echo $i; ?>">
								<?php echo $i; ?>
							</a></li>
						<?php
					}
				?>
				<li>
					<?php 
						if($pagina_posterior <= $num_pagina){
							?><a href="administrativo.php?link=71&pagina=<?php echo $pagina_posterior; ?>" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a><?php
						}else{
							?><span aria-hidden="true">&raquo;</span><?php
						}
					?>
				</li>
			</ul>
		</nav>
	</div>
</div> 
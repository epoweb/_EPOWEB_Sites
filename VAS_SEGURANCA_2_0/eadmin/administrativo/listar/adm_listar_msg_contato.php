<?php
	//Verificar se esta sendo passado na URL a página atual, senão é atribuido a pagina
	$pagina=(isset($_GET['pagina'])) ? $_GET['pagina'] : 1;
	
	//Selecionar todos os itens da tabela 
	$result_msg_contato = "SELECT * FROM mensagens_contatos";
	$resultado_msg_contato = mysqli_query($conn , $result_msg_contato);
	
	//Contar o total de itens
	$total_msg_contatos = mysqli_num_rows($resultado_msg_contato);
	
	//Seta a quantidade de itens por página
	$quantidade_pg = 20;
	
	//calcular o número de páginas 
	$num_pagina = ceil($total_msg_contatos/$quantidade_pg);
	
	//calcular o inicio da visualizao	
	$inicio = ($quantidade_pg*$pagina)-$quantidade_pg;
	
	//Selecionar  os itens da página
	$result_msg_contatos = "SELECT * FROM mensagens_contatos limit $inicio, $quantidade_pg";
	$resultado_msg_contatos = mysqli_query($conn , $result_msg_contatos);
	$total_msg_contatos = mysqli_num_rows($resultado_msg_contatos);
	
?>
<main id="main" class="main" style="margin-top:-15px">
	<div class="card">
		<div class="pagetitle" style="padding: 10px">
			<h1>Listar Mensagens</h1>
			<nav>
				<ol class="breadcrumb">
				<li class="breadcrumb-item">Home</li>
				<li class="breadcrumb-item active">Mensagens</li>
				<li class="breadcrumb-item active">Listar Mensagens</li>
				</ol>
			</nav>
		</div><!-- End Page Title -->
		
		<div class="card-body">
			<div class="row espaco">
			</div>	
			<table class="table" style="font-size:14px">
					<thead>
						<tr>
							<th class="text-center">Id</th>
							<th class="text-center">Nome</th>
							<th class="text-center">E-mail</th>
							<th class="text-center">Situação</th>
							<th class="text-center">Assunto</th>
							<th class="text-center">Inserido</th>
							<th class="text-center">Ação</th>
						</tr>
					</thead>
					<tbody>
						<?php while($row_msg_contato = mysqli_fetch_assoc($resultado_msg_contatos)){?>
							<tr>
								<td class="text-center"><?php echo $row_msg_contato["id"]; ?></td>
								<td class="text-center"><?php echo $row_msg_contato["nome"]; ?></td>
								<td class="text-center"><?php echo $row_msg_contato["email"]; ?></td>
								<td class="text-center">
									<?php $situacoes_contato_id = $row_msg_contato["situacoes_contato_id"]; 
										$result_sit_contato = "SELECT * FROM situacoes_contatos WHERE id = '$situacoes_contato_id' LIMIT 1";
										$resultado_sit_contato = mysqli_query($conn, $result_sit_contato);
										$row_sit_contato = mysqli_fetch_assoc($resultado_sit_contato);
										?><span class="label label-<?php echo $row_sit_contato['cor']; ?>"><?php echo $row_sit_contato['nome']; ?></span>
								</td>
								<td class="text-center"><?php echo $row_msg_contato["assunto"]; ?></td>
								<td class="text-center"><?php echo date('d/m/Y H:i:s',strtotime($row_msg_contato["created"])); ?></td>
								<td class="text-center">
									<a href="administrativo.php?link=64&id=<?php echo $row_msg_contato["id"]; ?>">
										<button type="button" class="btn btn-xs btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" style="font-size:12px" data-bs-original-title="Visualizar">
											<i class="bi bi-eye"></i>
										</button>
									</a>
									<a href="administrativo.php?link=66&id=<?php echo $row_msg_contato["id"]; ?>">
										<button type="button" class="btn btn-xs btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="" style="font-size:12px" data-bs-original-title="Editar">
											<i class="bi bi-pencil"></i>
										</button>
									</a>
									<a href="administrativo/processa/adm_apagar_msg_contato.php?id=<?php echo $row_msg_contato["id"]; ?>">
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
									?><a href="administrativo.php?link=67&pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
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
									<li><a href="administrativo.php?link=67&pagina=<?php echo $i; ?>">
										<?php echo $i; ?>
									</a></li>
								<?php
							}
						?>
						<li>
							<?php 
								if($pagina_posterior <= $num_pagina){
									?><a href="administrativo.php?link=67&pagina=<?php echo $pagina_posterior; ?>" aria-label="Next">
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
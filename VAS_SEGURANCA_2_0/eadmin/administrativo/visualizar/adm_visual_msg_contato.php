<?php
	$id = $_GET['id'];	
	$result_msg_contatos = "UPDATE mensagens_contatos SET situacoes_contato_id='2', modified =  NOW() WHERE id = '$id' && situacoes_contato_id = '1'";
	$resultado_msg_contatos = mysqli_query($conn, $result_msg_contatos);
	
	//Buscar os dados referente ao usuario situado neste id
	$result_msg_contato = "SELECT * FROM mensagens_contatos WHERE id = '$id' LIMIT 1";
	$resultado_msg_contato = mysqli_query($conn, $result_msg_contato);
	$row_msg_contato = mysqli_fetch_assoc($resultado_msg_contato);	
?>
<main id="main" class="main" style="margin-top:-15px">
<div class="card">
	<div class="pagetitle" style="padding: 10px">
		<h1>Listar Mensagens de Contato</h1>
		<nav>
			<ol class="breadcrumb">
			<li class="breadcrumb-item">Home</li>
			<li class="breadcrumb-item active">Mensagens</li>
			<li class="breadcrumb-item active">Listar Mensagens de Contato</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->
	
	<div class="card-body">
		<div class="row espaco">
			<div class="pull-right">
				<a href="administrativo.php?link=63"><button type='button' class='btn btn-sm btn-success' style='font-size:14px'>Listar</button></a>
				
				<a href="administrativo.php?link=66&id=<?php echo $row_msg_contato["id"]; ?>"><button type="button" class="btn btn-sm btn-warning" style="font-size:14px">Editar</button></a>
				
				<a href="administrativo/processa/adm_apagar_msg_contato.php?id=<?php echo $row_msg_contato["id"]; ?>"><button type="button" class="btn btn-sm btn-danger" style="font-size:14px">Apagar</button></a>
			</div>
		</div>
		<dl class="dl-horizontal" style="font-size:14px">	
			<dt>Id: </dt>
			<dd><?php echo $row_msg_contato['id']; ?></dd>
			<dt>Nome: </dt>
			<dd><?php echo $row_msg_contato['nome']; ?></dd>
			<dt>E-mail: </dt>
			<dd><?php echo $row_msg_contato['email']; ?></dd>
			<dt>Telefone: </dt>
			<dd><?php echo $row_msg_contato['telefone']; ?></dd>
			<dt>Assunto: </dt>
			<dd><?php echo $row_msg_contato['assunto']; ?></dd>
			<dt>Mensagem: </dt>
			<dd><?php echo $row_msg_contato['mensagem']; ?></dd>
			<dt>Situação: </dt>
			<dd>
				<?php 
				$situacoes_contato_id = $row_msg_contato['situacoes_contato_id'];
				$result_sit_contato = "SELECT * FROM situacoes_contatos WHERE id = '$situacoes_contato_id'";
				$result_sit_contato = mysqli_query($conn, $result_sit_contato);
				$row_sit_contato = mysqli_fetch_assoc($result_sit_contato);
				?><span class="label label-<?php echo $row_sit_contato['cor']; ?>"><?php echo $row_sit_contato['nome']; ?></span>
			</dd>
			<dt>Inserido: </dt>
			<dd><?php 
				if(isset($row_msg_contato['created'])){
					$inserido = $row_msg_contato['created'];
					echo date('d/m/Y H:i:s', strtotime($inserido)); 
				}?>
			</dd>
			<dt>Alterado: </dt>
			<dd><?php 
				if(isset($row_msg_contato['modified'])){				
					echo date('d/m/Y H:i:s',strtotime($row_msg_contato['modified'])); 
				} ?>
			</dd>
			<dt>Alterar Situação: </dt>
			<dd><?php 
				$result_sit_contatos = "SELECT * FROM situacoes_contatos";
				$result_sit_contatos = mysqli_query($conn, $result_sit_contatos); ?>
				<form action="administrativo/processa/adm_proc_sit_contato.php" method="POST">
					<?php while($rows_sit_contatos = mysqli_fetch_array($result_sit_contatos)){
						$id_sit_contatos = $rows_sit_contatos['id']; ?>
						<p>
							<input type='radio' name='situacao_contato' value='<?php echo $id_sit_contatos; ?>' 
							<?php if($situacoes_contato_id == $id_sit_contatos){ echo 'checked'; } ?>> 
							
							<span class="label label-<?php echo $rows_sit_contatos['cor']; ?>"><?php echo $rows_sit_contatos['nome']; ?></span>
						</p>
						
					<?php } ?>
					<input type="hidden" name="id" value="<?php echo $row_msg_contato['id']; ?>">
					<input type="submit" class="btn btn-warning" value="Confirmar a Alteração" style="font-size:14px">
				</form>
			</dd>
		</dl>
	</div>
</div>
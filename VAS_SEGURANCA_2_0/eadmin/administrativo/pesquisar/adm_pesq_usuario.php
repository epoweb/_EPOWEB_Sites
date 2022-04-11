
<main id="main" class="main" style="margin-top:-15px">
<div class="card">
	<div class="pagetitle" style="padding: 10px">
		<h1>Pesquisar Usuários</h1>
		<nav>
			<ol class="breadcrumb">
			<li class="breadcrumb-item">Home</li>
			<li class="breadcrumb-item active">Usuários</li>
			<li class="breadcrumb-item active">Pesquisar Usuários</li>
			</ol>
		</nav>
	</div><!-- End Page Title -->
	<div class="card-body">
		<div class="row espaco">
			<div class="pull-right">
			<a href="administrativo.php?link=2"><button type='button' class='btn btn-sm btn-primary' style='font-size:14px'>Listar</button></a>
			<a href="administrativo.php?link=3"><button type='button' class='btn btn-sm btn-success' style='font-size:14px'>Cadastrar</button></a>
			</div>
		</div>
		<form class="form-horizontal" method="POST" action="" style="font-size:14px">
			<div class="form-group">
				<label class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-10">
					<input type="text" name="pesquisa" class="form-control" id="pesquisa" placeholder="Nome do Usuários" style="font-size:14px">
				</div>
			</div>
		</form>			
		<div class="row">
			<div class="col-md-12">
				<table class="table" style="font-size:14px">
					<thead>
						<tr>
							<th class="text-center">Inscrição</th>
							<th class="text-center">Nome</th>
							<th class="text-center">E-mail</th>
							<th class="text-center">Situação</th>
							<th class="text-center">Nivel de Acesso</th>
							<th class="text-center">Inserido</th>
							<th class="text-center">Ação</th>
						</tr>
					</thead>
					<tbody class="resultado">
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
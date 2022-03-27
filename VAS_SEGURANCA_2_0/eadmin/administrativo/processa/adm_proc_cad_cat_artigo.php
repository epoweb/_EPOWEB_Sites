<?php
	session_start();
	include_once("../../conexao/conexao.php");
	include_once('../../../lib/confin_url.php');
	
	//Variavel controla a necessidade de salvar no banco
	$salvar_dados_bd = 1; //Valor $salvar_dados_bd = 1 deve salvar no banco / $salvar_dados_bd = 2 não salvar no banco
	//Verifica o campo nome não esta vazio
	//Estando vazio redirecionao usuário para o formulário
	
		$nome = mysqli_real_escape_string($conn, $_POST['nome']);
		
		$result_niveis_acessos = "INSERT INTO categorias_artigos (nome, created) VALUES ('$nome', NOW())";
		$resultado_niveis_acessos = mysqli_query($conn, $result_niveis_acessos);	
		?>
		<!DOCTYPE html>
		<html lang="pt-br">
			<head>
				<meta charset="utf-8">
			</head>

			<body> <?php
				if(mysqli_affected_rows($conn) != 0){
					$url = pg.'/eadmin/administrativo.php?link=50';
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
						<script type=\"text/javascript\">
							alert(\"Categoria de Artigo cadastrado com Sucesso.\");
						</script>
					";	
				}else{
					$url = pg.'/eadmin/administrativo.php?link=50';
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
						<script type=\"text/javascript\">
							alert(\"Categoria de Artigo não foi cadastrado com Sucesso.\");
						</script>
					";	
				}?>
			</body>
		</html>
		<?php 
	
	$conn->close(); ?>
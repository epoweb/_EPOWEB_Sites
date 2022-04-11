<main id="main" class="main" style="margin-top:-15px">
    <div class="pagetitle">
	  <?php	echo "<h1> Olá administrador(a) ". $_SESSION['usuarioNome'] .", Bem Vindo! </h1>";	?>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">
		  <!--INÍCIO - SCRIPT DATA E HORA E SAUDAÇÃO -->
		  	<script language="Javascript" type="text/Javascript">
				var dataHora, xHora, xDia, dia, mes, ano, saudacao;
				dataHora = new Date();
				xHora = dataHora.getHours();
				if (xHora >= 0 && xHora <6) {saudacao = "Boa Madrugada! "} if (xHora >= 6 && xHora <12) {saudacao = "Bom Dia! "} if (xHora >= 12 && xHora < 18) {saudacao = "Boa Tarde! "} if (xHora >= 18 && xHora <= 23) {saudacao = "Boa Noite!"}
				xDia = dataHora.getDay();
				diaSem = new Array(7);
				diaSem[0] = "Domingo"; diaSem[1] = "Segunda-Feira"; diaSem[2] = "Terça-Feira"; diaSem[3] = "Quarta-Feira"; diaSem[4] = "Quinta-Feira"; diaSem[5] = "Sexta-Feira"; diaSem[6] = "Sábado";
				dia = dataHora.getDate();
				mes = dataHora.getMonth();
				mesAno = new Array(12);
				mesAno[0] = "Janeiro"; mesAno[1] = "Fevereiro"; mesAno[2] = "Março"; mesAno[3] = "Abril"; mesAno[4] = "Maio"; mesAno[5] = "Junho"; mesAno[6] = "Julho"; mesAno[7] = "Agosto";
				mesAno[8] = "Setembro"; mesAno[9] = "Outubro"; mesAno[10] = "Novembro"; mesAno[11] = "Dezembro";
				ano = dataHora.getFullYear();
				document.write("" + "" + saudacao + " " + diaSem[xDia] + ", " + dia + " de " + mesAno[mes] + " de " + ano + "");
				
				function showTimer() {
				var time=new Date();
				var hour=time.getHours();
				var minute=time.getMinutes();
				var second=time.getSeconds();
				if(hour<10)   hour  ="0"+hour;
				if(minute<10) minute="0"+minute;
				if(second<10) second="0"+second;
				var st=hour+":"+minute+":"+second;
				document.getElementById("timer").innerHTML=st; 
				}
				function initTimer() {
				// O metodo nativo setInterval executa uma determinada funcao em um determinado tempo  
				setInterval(showTimer,1000);
				}
        	</script><!--FIM - SCRIPT DATA E HORA E SAUDAÇÃO -->
            <body onLoad="initTimer()"> - <span id="timer"></span></body>
		  </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
		<div class="row">
			<!-- Usuários Cadastrados-->
			<div class="col-lg-8">
				<div class="row">

			 		<!-- Banners Cadastrados -->
					<div class="col-xxl-4 col-md-6">
						<div class="card info-card sales-card">
								<div class="card-body">
								<h5 class="card-title">Banners <span>| Cadastrados</span></h5>
								<div class="d-flex align-items-center">
									<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
									<i class="bi bi-person-video2"></i>
									</div>
									<div class="ps-3">
										<?php $sql = "SELECT * FROM carrouses"; $query = $conn->query($sql);
											echo "<h6>".$query->num_rows."</h6>";
										?>
										<h4><a href="administrativo.php?link=67">Mais Informações</a></h4>
									</div>
								</div>
							</div>
						</div>
					</div><!-- End Banners Cadastrtados -->

			 		<!-- Artigos Cadastrados -->
					<div class="col-xxl-4 col-md-6">
						<div class="card info-card revenue-card">
								<div class="card-body">
								<h5 class="card-title">Artigos <span>| Cadastrados</span></h5>
								<div class="d-flex align-items-center">
									<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
									<i class="bi bi-newspaper"></i>
									</div>
									<div class="ps-3">
										<?php $sql = "SELECT * FROM artigos"; $query = $conn->query($sql);
											echo "<h6>".$query->num_rows."</h6>";
										?>
										<h4><a href="administrativo.php?link=55">Mais Informações</a></h4>
									</div>
								</div>
							</div>
						</div>
					</div><!-- End Artigos Cadastrtados -->

					<!-- Usuários Cadastrados -->
					<div class="col-xxl-4 col-xl-6">
						<div class="card info-card customers-card">
							<div class="card-body">
								<h5 class="card-title">Usuários <span>| Cadastrados</span></h5>
								<div class="d-flex align-items-center">
									<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
										<i class="bi bi-people"></i>
									</div>
									<div class="ps-3">
										<?php $sql = "SELECT * FROM usuarios"; $query = $conn->query($sql);
											echo "<h6>".$query->num_rows."</h6>";
										?>
										<h4><a href="administrativo.php?link=2">Mais Informações</a></h4>
									</div>
								</div>
							</div>
						</div>
					</div><!--col-xxl-4 col-xl-12"-->
					<!-- End Usuários Cadastrados -->

				</div><!-- End Row -->
			</div><!--col-lg-8-->
			<!-- Fim Usuários Cadastrados-->
		</div><!--End row-->
    </section>

  </main><!-- End #main -->
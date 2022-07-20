<?php include_once "includes/header.php";?>
   <!--================End Banner Area =================-->
   <section class="map_area">
		<div id="mapBox" class="mapBox row m0" 
			data-lat="40.701083" 
			data-lon="-74.1522848" 
			data-zoom="13" 
			data-marker="img/map-marker.png" 
			data-info="54B, Tailstoi Town 5238 La city, IA 522364"
			data-mlat="40.701083"
			data-mlon="-74.1522848">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.0901536926626!2d-46.700815285019445!3d-23.708474384610085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4f8391cee647%3A0x394f4a2689dadbb9!2sVAS%20Seguran%C3%A7a!5e0!3m2!1sen!2sbr!4v1649676611782!5m2!1sen!2sbr" width="1903" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
    </section>      
        <!--================End Main Header Area =================-->
        <!--
			<section class="banner_area">
				<div class="container">
					<div class="banner_text">
						<h3>Contact Us</h3>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="contato.php">Contato</a></li>
						</ul>
					</div>
				</div>
			</section> 
		-->
        <!--================End Main Header Area =================-->
        
        <!--================Contact Form Area =================-->
        <section class="contact_form_area p_100">
        	<div class="container">
        		<div class="main_title">
					<center><h2>Fale Conosco</h2></center>
					<h5>Entre em contato conosco em estaremos retornando o contato o mais breve possível!</h5>
				</div>
       			<div class="row">
       				<div class="col-lg-7">
       					<form class="row contact_us_form" action="http://galaxyanalytics.net/demos/cake/theme/cake-html/contact_process.php" method="post" id="contactForm" novalidate="novalidate">
							<div class="form-group col-md-6">
								<input type="text" class="form-control" id="name" name="name" placeholder="Digite seu Nome">
							</div>
							<div class="form-group col-md-6">
								<input type="email" class="form-control" id="email" name="email" placeholder="Digite e-mail">
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Digite o Assunto">
							</div>
							<div class="form-group col-md-12">
								<textarea class="form-control" name="message" id="message" rows="1" placeholder="Digite a Mensagem"></textarea>
							</div>
							<div class="form-group col-md-12">
								<button type="submit" value="submit" class="btn order_s_btn form-control">Enviar Mensagem</button>
							</div>
						</form>
       				</div>
       				<div class="col-lg-4 offset-md-1">
       					<div class="contact_details">
       						<div class="contact_d_item">
       							<h3>Localização :</h3>
       							<p>Rua Icanhema, 123 - Cidade Dutra<br /> CEP: 04810-120 - São Paulo - SP - Brasil </p>
       						</div>
       						<div class="contact_d_item">
       							<h5>Ligue: <a href="tel:115660741">(11) 5667-5875 </a></h5>
       							<h5>Email : <a href="mailto:contato@vasseguranca.com.br">contato@vasseguranca.com.br</a></h5>
       						</div>
       						<div class="contact_d_item">
       							<h3>Horário Atendimento:</h3>
       							<p>Segunda à Sexta: 08:00hrs - 17:00hrs
								   </br>
								   Sábado, Domingo e Feriado: Fechado
							</p>
       						</div>
       					</div>
       				</div>
       			</div>
        	</div>
        </section>
        <!--================End Contact Form Area =================-->
        
        
        <!--================Newsletter Area =================-->
        <section class="newsletter_area">
        	<div class="container">
        		<div class="row newsletter_inner">
        			<div class="col-lg-6">
        				<div class="news_left_text">
        					<h4>Join our Newsletter list to get all the latest offers, discounts and other benefits</h4>
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="newsletter_form">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Enter your email address">
								<div class="input-group-append">
									<button class="btn btn-outline-secondary" type="button">Subscribe Now</button>
								</div>
							</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Newsletter Area =================-->
        
<!--================Footer Area =================-->
<?php include_once "includes/footer.php";?>
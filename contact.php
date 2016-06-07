<?php require_once('header.php'); ?>
	<header id="header" class="header-4">
		<div class="container clearfix">
			<div class="logo"><a href="index.php"><img alt="" src="images/logo-3.png"></a></div>
			<div class="row">
				<div class="col-md-6">
					<div class="navigation navigation-1">
						<ul>
							<li><a href="index.php">Início</a></li>
							<li><a href="about.php">Sobre</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="navigation navigation-2">
						<ul>
							<li><a href="menu.php">Cardápio</a></li>
							<li><a href="contact.php" class="active-link">Contato</a></li>
						</ul>
					</div>
				</div>
			</div>
			
		</div><!-- End container -->
	</header><!-- End header -->
	
	<div class="newhader">

	</div>
	
	<div class="section-1">
		<div class="re_s_2"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<div><h3>Entre em contato :)</h3><span></span></div>
					</div>
					<div class="clearfix"></div>
					
					<div class="row">
						<div class="col-md-8">
							<div class="page-content">
								<h2 class="page-content-title"><i class="icon-envelope-alt"></i>Envie-nos uma mensagem</h2>
								<form class="form-style" action="sendemail.php" method="post">
									<div class="row">
										<div class="col-md-6">
											<p>
												<input type="text" class="required-item" name="name" id="name" aria-required="true" placeholder="Nome">
											</p>
											<p>
												<input type="text" id="phone" name="phone" placeholder="Telefone">
											</p>
										</div>
										<div class="col-md-6">
											<p>
												<input type="email" class="required-item" id="mail" name="mail" aria-required="true" placeholder="Email">
											</p>
											<p>
												<input type="text" id="subject" name="subject" class="required-item" aria-required="true" placeholder="Assunto">
											</p>
										</div>
										<div class="col-md-12">
											<div class="form-message">
												<textarea id="message" class="required-item" name="message" aria-required="true" cols="58" rows="7"></textarea>
												<input name="submit" type="submit" value="Enviar" class="submit button small color">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-4">
							<div class="page-content">
								<h2 class="page-content-title"></i>Informações</h2>
								<ul class="contact-information">
									<li>Telefone:<br/> <span>(11) 2961 - 0629 </span></li>
									<li>Email: <br/><span>contato@saborefood.com.br</span></li>
									<li>Endereço: <br/><span>Avenida Lorem ipsum, 12 Guaianases - São Paulo/SP</span></li>
								</ul>
							</div>
							<!-- <div class="page-content">
								<h2 class="page-content-title"><i class="icon-share-alt"></i>Siga-nos</h2>
								<div class="contact-social">
									<ul>
										<li class=""><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li class=""><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li class=""><a href="#"><i class="fa fa-twitter"></i></a></li>
									</ul>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div><!-- End section-1 -->
	<!-- <div class="contact-map" style="border-top: 3px solid #71a866">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d117085.7046142522!2d-46.45151578925782!3d-23.499093026014727!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce64493678f207%3A0x4785d1653b29de31!2sGuaianazes!5e0!3m2!1spt-BR!2sbr!4v1464817283625" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div> -->
<?php require_once('footer.php'); ?>
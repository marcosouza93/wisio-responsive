<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Wisio, Desenvolvimento de Sites Personalizados, Site para Celular, Sorocaba SP</title>
		<meta name="description" content="" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="css/style-contato.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/icon.css" />

		<!-- Inicio código js like button -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
  		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<!-- Fim código js like button -->

	</head>
	<body>
	<section class="widgets">
		<div class="row-fluid">
			<div class="container">
				<div class="span12">
				<section class="social">
					<ul>
						<li><a href="http://wwww.facebook.com/wisioweb" target="_blank"><span class="wid facebook">&nbsp;</span></a></li>
						<li><a href="http://www.twitter.com" target="_blank"><span class="wid twitter">&nbsp;</span></a></li>
						<li><a href="http://www.plus.google.com" target="_blank"><span class="wid google">&nbsp;</span></a></li>
						<li><a href="mailto:contato@wisio.com.br"><span class="wid mail">&nbsp;</span></a></li>
					</ul>
				</section>
				</div>
			</div>
		</div>
	</section>
	<header class="header">
		<div class="row-fluid">
			<div class="container">
				<div class="span3">
					<div class="logo">
					<a href="index.php"><img src="img/logo.png" alt="Logo Wisio" /></a>
					<h1>Wisio</h1>
					<p>Desenvolvimento de Mídia Digital Inteligente</p>
					</div>
				</div>
				<div class="span9">
				


					<nav class="nav">
				    				<a class="btn-mobile btn-navbar hidden-desktop hidden-tablet" data-toggle="collapse" data-target=".nav-collapse">
				        				Menu <span class="icon-align-justify icon-white"></span>
				      				</a>
									<ul class="nav-collapse collapse">
										<li><a href="empresa.html">Empresa</a></li>
										<li><a href="solucoes.html">Soluções</a></li>
										<li><a href="portfolio.html">Portfólio</a></li>
										<li><a href="contato.php" class="selected">Contato</a></li>
									</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<section class="content hardblue">

		<div class="row-fluid">
			<div class="container">
				<div class="span12 no-margin">
						<div class="ic">
							<div class="icons-p"><div class="arrow-p"></div></div>
						</div>
				</div>
				<div class="span12 no-margin">
				<div class="span6">


						<form class="form" method="post" action="">
							<div class="control-group">
							<label class="control-label"> Nome: </label>
							<div class="controls">
							<input type="text" name="nome" id="nome" class="span*" placeholder="Digite seu nome"/>
						    </div></div>


							<div class="control-group">
							<label class="control-label"> Empresa: </label>
							<div class="controls">
							<input type="text" name="empresa" id="empresa" class="span*" placeholder="Digite o nome da empresa"/> 
						    </div></div>

							<div class="control-group">
							<label class="control-label"> Email: </label>
							<div class="controls">
							<input type="text" name="email" id="email" class="span*" placeholder="Digite seu email" required/> 
							</div></div>

							<div class="control-group">
							<label class="control-label"> Telefone: </label>
							<div class="controls">
							<input type="text" name="dddtel" id="dddtel" class="input-mini" maxlength="2" placeholder="99"/> 
						    <input type="text" name="tel" id="tel" class="input-medium" maxlength="9" placeholder="9999-9999"/>
						    </div></div>

						    <div class="control-group">
							<label class="control-label"> Celular: </label>
						    <div class="controls">
							<input type="text" name="dddcel" id="dddcel" class="input-mini" maxlength="2" placeholder="99"/> 
						    <input type="text" name="cel" id="cel" class="input-medium" maxlength="9" placeholder="9999-9999"/>
						    </div></div>
						    
						
					
				</div>
 				<div class="span6">

 				 	
 				 		<div class="control-group">
						<label class="control-label">Assunto: </label>
						<div class="controls">
						<input type="text" name="assunto" id="assunto" class="span*" placeholder="Escreva o assunto da mensagem" required/>
						</div></div>

						<div class="control-group">
						<label class="control-label"> Departamento: </label>
						<div class="controls">
						<select class="span6" name="departamento" id="departamento">
  						<option>Financeiro</option>
  						<option>Recursos Humanos </option>
  						<option>Suporte Técnico</option>
  						<option>Vendas</option>
						</select>
						</div></div>

						<div class="control-group">
						<label class="control-label">Mensagem: </label>
						<div class="controls">
						<textarea rows="6" class="span*" placeholder="Digite aqui sua mensagem" id="mensagem" name="mensagem"></textarea>
						</div></div>
						<divstyle="margin-top:20px;">
						<input type="submit" class="btn btn-info" value="Enviar" name="enviar"/>
 						<input type="reset" class="btn" value="Limpar"/>
 						</div>
 				 	</form>
 				 </div>	
 				 <div style="height: 40px;"></div>

			</div>
		</div>
	</div>

	</section>

	<section class="content blue">

		<div class="row-fluid">

			<div class="container">

					<div class="span6">
							<div class="icon"><div class="arrow map-sb"></div><div class="line big"></div></div>
							<h3><span class="hard-blue">Encontre a</span> <span class="white">Wisio</span></h3>
							<div class="map-container">
								<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Rua+Coronel+Nogueira+Padilha,+1011,+Sorocaba+-+S%C3%A3o+Paulo&amp;aq=t&amp;sll=-23.470007,-47.436634&amp;sspn=0.357118,0.676346&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Cel.+Nogueira+Padilha,+1011+-+Vila+Hort%C3%AAncia,+Sorocaba+-+S%C3%A3o+Paulo,+18020-002&amp;ll=-23.507341,-47.44138&amp;spn=0.022313,0.042272&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"></iframe><br />
							</div>
							
					</div>

				<div class="span5 offset1">
						<div class="icon"><div class="arrow phone-sb"></div><div class="line big"></div></div>
						<h3><span class="hard-blue">Informações</span></h3>
					    </br>
						<span class="white">
						<p> FONE (15) 3346.6961 </p>
						<p>CEL (15) 9605.1071</p>
						<p>contato@wisio.com.br</p>
						<p>Av. Nogueira Padilha, 1011</p>
						<p>2º Andar - Vila Hortência</p>
						<p>CEP 18020-002 - Sorocaba/SP - Brasil	</p>
						</span>
					<div style="height: 40px;"></div>

			    </div>
			
			</div>
		</div>
	</section>


	<section class="content gray">

		<div class="row-fluid">

			<div class="container">
					<div class="uprodape span12">
						<div class="span3">
							<h4>Suporte</h4>
							<ul>
								<li><a href="">Dúvidas Frequentes</a></li>
								<li><a href="">Como Funciona</a></li>
								<li><a href="">Entre em Contato</a></li>
							</ul>
						</div>
						<div class="span3">
							<h4>Responsabilidade</h4>
							<ul>
								<li><a href="">Blog</a></li>
								<li><a href="">Projetos Sociais</a></li>
								<li><a href="">Imprensa</a></li>
							</ul>
						</div>
						<div class="span3">
							<h4>Mapa do site</h4>
							<ul>
								<li><a href="index.php">Início</a></li>
								<li><a href="empresa.html">Empresa</a></li>
								<li><a href="solucoes.html">Soluções</a></li>
								<li><a href="portfolio.html">Portfólio</a></li>
								<li><a href="contato.php">Contato</a></li>
							</ul>
						</div>
						<div class="span3">
							<h4>Qualidade</h4>
							<div></div>
						</div>
					</div>

				<div class="line-rodape span12">
					<div class="span3 celular-container visible-desktop">
						<img src="img/todas-plataformas.png" alt="Wisio Mobile" />
					</div>
					<div class="span4 no-margin">
						<p>
							Este site é compatível com qualquer dispositivo,
						   	esteja sempre conectado.
						</p>
					</div>
					<div class="span5">					
						<div class="fb">
							<div class="fb-like visible-desktop" data-href="http://www.facebook.com/wisioweb" data-send="true" data-width="390" data-show-faces="false"></div>
							<div class="fb-like hidden-desktop" data-href="http://www.facebook.com/wisioweb" data-send="true" data-width="450" data-show-faces="false"></div>
							
						</div>

			</div>	
		</div>
	</section>

	<footer class="footer">

		<div class="row-fluid">

			<div class="container">
					<div class="span12">
						<p>Copyright &copy; Todos os direitos reservados ®</p>
					</div>
			</div>
		</div>

	</footer>




	<?php

	if(isset($_POST['enviar'])){


$con = mysql_connect("dbmy0105.whservidor.com","wisio","89i7adxk");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("wisio", $con);

$nome = $_POST['nome'];
$empresa = $_POST['empresa'];
$email = $_POST['email'];
$dddtel = $_POST['dddtel'];
$tel = $_POST['tel'];
$dddcel = $_POST['dddcel'];
$cel = $_POST['cel'];
$assunto = $_POST['assunto'];
$departamento = $_POST['departamento'];
$mensagem = $_POST['mensagem'];
$data = date('d/m/y');
$status = 0;
$timestamp = mktime(date("h")-3);
$hora = date("h:i:s", $timestamp);


$sql="INSERT INTO tblwisiocontato (nome, empresa, email, dddtel, tel, dddcel, cel, assunto, departamento, mensagem, data, status, hora)
VALUES
('$nome', '$empresa', '$email', '$dddtel', '$tel', '$dddcel', '$cel', '$assunto', '$departamento', '$mensagem', '$data', '$status', '$hora')";

if (!mysql_query($sql,$con))
  {
  die('Erro: ' . mysql_error());
  }

 echo "<script>";
 echo "alert('Mensagem enviada com sucesso!');";
 echo "</script>";


mysql_close($con);

}
?>

		
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>
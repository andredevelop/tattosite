<?php include('config.php'); ?>
<?php Site::updateUsuarioOnline(); ?>
<?php Site::contadorVisitas(); ?>
<?php
//para selecionar as coisas da tabela para o index exeto projetos e serviços
	$chamada = Painel::selecionarTudo('tb_site.config');
	foreach ($chamada as $key => $value) {

?>
<!-- fazer o resto do sobre -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title><?php echo $value['titulo']; ?></title>
	<!-- font open sans -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
	
	<link rel="shortcut icon" type="image-x/png" href="<?php echo INCLUDE_PATH ?>favicon.ico">
	<!-- charset -->
	<meta charset="utf-8">
	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
	<script src="https://kit.fontawesome.com/d76df92ddf.js" crossorigin="anonymous"></script>
	<link href="<?php echo INCLUDE_PATH ?>css/all.css" rel="stylesheet"/>
	<!-- estilo -->
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/jquery.fancybox.css"/>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css"/>
</head>
<body>

<header id="home">

	<div class="overlay">
		<i class="fas fa-bars right"></i><!-- menu mobile tn -->
			<div class="container">
				<nav class="menu-desktop">
					<ul>
						<li><a href="#home">Home</a></li>
						<li><a href="#sobre">Sobre</a></li>
						<li><a href="#servicos">Serviços</a></li>
					</ul>
				</nav>
				
				<div class="logo-wraper">
					<img src="<?php echo INCLUDE_PATH; ?>image/logo.png">
					<a class="logo" href="">MANO TATTOO</a>
					<h2>tattoo <span>x</span> estudio</h2>
				</div>

				<nav class="menu-desktop d2">
					<ul class="ul2">
						<li><a href="#projetos">Trabalhos</a></li>
						<li><a href="#depoimentos">Depoimentos</a></li>
						<li><a href="#contato">Contato</a></li>
					</ul>
				</nav><!-- menu desktop -->


				<nav class="menu-mobile">
					<ul>
						<li><a href="#home">Home</a></li>
						<li><a href="#sobre">Sobre</a></li>
						<li><a href="#servicos">Serviços</a></li>
						<li><a href="#projetos">Trabalhos</a></li>
						<li><a href="#depoimentos">Depoimentos</a></li>
						<li><a href="#contato">Contato</a></li>
					</ul>
				</nav><!-- menu mobile -->

			</div><!-- container -->

			<div class="btn-header">
				<a target="_blank" href="">Instagram <i class="fa-brands fa-instagram"></i></a>
				<div class="cega"></div>
				<a target="_blank" href="">whatsapp <i class="fa-brands fa-whatsapp"></i></a>
			</div><!-- btn-header -->
			<div class="btn-header2">
				<a href="#contato">contato via e-mail</a>
			</div><!-- btn-header -->

			<div class="qualidades">
				<div class="q1">
					<p>Material esterilizado</p>
					<span>Sua saúde importa aqui!</span>
				</div><!-- q1 -->
				<div class="q1">
					<p>Profissional qualificado</p>
					<span>Deixa comigo que vai ser show!</span>
				</div><!-- q2 -->
				<div class="q1">
					<p>Talento</p>
					<span>Você vai se impressionar!</span>
				</div><!-- q3 -->
			</div><!-- qualidades -->
	</div><!-- overlay -->
</header><!-- header -->

<section  id="sobre" class="sobre">
	<div class="imgSobreWraper">
		<div class="imgSobre" style='background-image:url("<?php echo INCLUDE_PATH_PAINEL ?>/uploads/<?php echo $value['imagem']; ?>")'></div>
	</div><!-- imgSobre -->
	<div class="textSobre">
		<?php echo $value['chamada'] ?>
		<a href="#servicos">Continuar no site</a>
	</div><!-- textSobre -->
</section><!-- banner -->
<?php } ?>


<section id="servicos" class="servicos">
	<div class="tituloServicos">
		<h2>Nossos serviços</h2>
		<div class="dots">
		
		</div><!-- dots -->
	</div><!--  -->
	<div class="scrollServico">
		<div class="scrollWraper">
			<?php 
				$servicos = Painel::selecionarTudo('tb_site.tecnologia');
				foreach ($servicos as $key => $value) {
			?>
			<div class="servicos-single">
				<i class="<?php echo $value['icone'] ?>"></i>
				<p><?php echo $value['titulo'] ?></p>
				<p><?php echo substr($value['descricao'], 0,120).' ...' ?></p>
			</div><!-- servicos-single -->
			<?php } ?>
		</div><!-- scrollWraper -->
	</div><!-- scrollservicos -->
</section><!-- sobre -->

<section id="projetos" class="projetos">
	<div class="container">
		<h2>trabalhos</h2>
		<div class="dots">

		</div><!-- dots -->

		<div class="scrollTrabalhos">
		<div class="scrollWraperT">
			<?php 
				$projetos = Painel::selecionarTudo('tb_site.projetos');
				foreach ($projetos as $key => $value) {
			?>
			<div class="trabalho-single">
				<a rel="trabalhosGaleria" href="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $value['imagem']?>"><img src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $value['imagem']?>"></a>
			</div><!-- trabalho-single -->
			<?php } ?>
		</div><!-- scrollWraperT -->
	</div><!-- scrollTrabalhos -->
	</div><!-- container -->
</section><!-- projetos -->

<section id="depoimentos" class="depoimentos">
	<div class="container">
		<h2>Depoimentos</h2>
		<div class="dots">

		</div><!-- dots -->
		<div class="scrollDepoimentos">
		<div class="scrollWraperD">
				<?php 
					$projetos = Painel::selecionarTudo('tb_site.depoimentos');
					foreach ($projetos as $key => $value) {
						if(!isset($value['depoimento']) || !isset($value['nome']) || !isset($value['data'])){
				?>
				<div class="depoimento-single">
					<p>Calma!</p>
					<p>Depoimentos ainda serão adicionados</p>
				</div><!-- servicos-single -->
				<?php }else{ ?>
				<div class="depoimento-single">
					<p><?php echo $value['depoimento'] ?></p>
					<p><?php echo $value['nome'] ?> - <?php echo $value['data'] ?></p>
				</div><!-- servicos-single -->
				<?php }} ?>
			</div><!-- scrollWraperD -->
		</div><!-- scrollDepoimentos -->
	</div><!-- container -->
</section><!-- comentarios -->

<section class="divisoria">
	<div class="overlayDivisoria">
		<h2>Entre em contato!</h2>
	</div><!-- overlayDivisoria -->
</section><!-- divisoria -->

<section id="contato" class="contato">
	<?php 
		if(isset($_POST['acao'])){
			if($_POST['nome'] != '' || $_POST['email'] != ''){
				$nome = $_POST['nome'];
				$email = $_POST['email'];
				$cidade = $_POST['cidade'];
				$telefone = $_POST['telefone'];
				$mensagem = $_POST['mensagem'];
				$hidden = $_POST['hidden'];
				
				if(filter_var($email, FILTER_VALIDATE_EMAIL)){
					$mail = new Email('smtp.office365.com','seuemail@hotmail.com','senha@1','nome');
					$mail->addAdress('seuemail@hotmail.com','nome');
					$mail->formatarEmail(array('assunto'=>$hidden,'corpo'=>'😎🤩 Gente nova, se liga: <br> Nome: '.$nome.'<br>E-mail: '.$email.'<br>Cidade: '.$cidade.'<br>Telefone: '.$telefone.'<hr>'.$mensagem));
					if($mail->enviarEmail()){
						echo '<script>alert("Enviado com sucesso!");</script>';
                        Painel::redirecionar(INCLUDE_PATH);
					}else{
						echo '<script>alert("Algo deu errado! Confira os dados digitados");</script>';
					}
				}else{
					echo '<script>alert("Insira um e-mail válido!");</script>';
				}
			}else{
				echo '<script>alert("Campos vazios não são permitidos!");</script>';
			}
		}
	?>
	<div class="pink-line"></div>
		<h2>Entre em contato</h2>
		<div class="container">
			<p>Preencha o formulário para entrar em contato e saber mais sobre o serviço ou apenas deixe seus dados para receber notícias de promoções.</p>
			<form method="post">
				<div>
					<p>*Nome:</p>
					<input type="text" name="nome" required placeholder="Seu nome">
				</div>
				<div>
					<p>*E-mail:</p>
					<input type="email" name="email" required placeholder="Seu E-mail">
				</div>
				<div>
					<p>Telefone:</p>
					<input type="text" name="telefone" placeholder="Com DDD">
				</div>
				<div>
					<p>Cidade:</p>
					<input type="text" name="cidade" placeholder="Apenas se quiser :D">
				</div>
				<input type="hidden" name="hidden" value="Formulario do site">
					<p>Mensagem:</p>
					<textarea name="mensagem" placeholder="Deixe sua mensagem!"></textarea>
				<input class="btn-sabermais" type="submit" name="acao" value="Enviar!">
			</form><!-- form -->
		</div><!-- container -->
</section><!-- contato -->

<footer>
	<div class="linha-H-footer"></div><!-- linha-H -->
	<div class="container">

		<div class="direitos">
			<img src="<?php echo INCLUDE_PATH ?>/image/logo.png">
			<p>Todos os direitos Reservados</p>
			<p>Desenvolvido por <a style="text-decoration:none;color:white" target="_blank" href="https://www.instagram.com/duartcode/">{DUARTCODE}</a></p>
			<p>Pacajus - Ceará - Brasil</p>			
		</div><!-- direitos -->

		<div class="linkUtil">
			<h3>Links Úteis</h3>
			<a href="#home">Home</a>
			<a href="#sobre">Sobre</a>
			<a href="#servicos">Serviços</a>
			<a href="#projetos">Trabalhos</a>
			<a href="#depoimentos">Depoimentos</a>
			<a href="#contato">Contato</a>
		</div><!-- link util -->

	</div><!-- container -->
</footer>


<script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH ?>js/jquery.fancybox.js"></script>
<script src="<?php echo INCLUDE_PATH ?>js/jquery.mask.js"></script>
<script src="<?php echo INCLUDE_PATH ?>js/functions.js"></script>
<script type="text/javascript">
	//para poder atualizar pagina sem enviar formulario
	if ( window.history.replaceState ) {
 	 window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>
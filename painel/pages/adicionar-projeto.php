<div class="container">
	<div class="box-content objeto-color">
		<h2><i class="fas fa-sitemap"></i> Cadastrar trabalho</h2>
		
		<form method="post" enctype="multipart/form-data">

			<?php 
				if(isset($_POST['acao'])){
					$nome_site = $_POST['nome_site'];
					$link_site = $_POST['link_site'];
					$imagem = $_FILES['imagem'];

					if($nome_site == ''){
						Painel::alert('erro','O nome não pode estar vazio!');
					}else if($link_site == ''){
						Painel::alert('erro','O link não pode estar vazio!');
					}else if ($imagem['name'] != '') {
						if(Painel::imagemValida($imagem) == false){
							Painel::alert('erro','A imagem não é válida!');
						}else{
							$imagem = Painel::uploadFile($imagem);
							$sql = MySql::conectar()->prepare("INSERT INTO `tb_site.projetos` VALUES (null,?,?,?)");
							if($sql->execute(array($nome_site,$link_site,$imagem))){
								Painel::alert('sucesso','Trabalho novo adicionado com sucesso!');
							}else{
								$imagem = '';
								Painel::alert('erro','Erro ao adicionar novo trabalho!');
							}
						}
					}else{
						Painel::alert('erro','Imagem está vazia!');
					}
				}

			?>

			<div class="form-group">
				<label>Nome do trabalho:</label>
				<input type="text" name="nome_site"/>
			</div><!--form-group-->

			<div class="form-group">
				<label>Link:</label>
				<textarea name="link_site">#</textarea>
			</div><!--form-group-->

			<div class="form-group">
				<label>Imagem do trabalho:</label>
				<input type="file" name="imagem"/>
			</div><!--form-group-->
<!-- -------------------------------------------------------------------------------------------------- -->
			<div class="form-group">
				<input class="btn-color" type="submit" name="acao" value="Cadastrar!">
			</div><!--form-group-->
		</form><!-- form -->
	</div><!-- box-content -->

	<div class="box-content objeto-color">
		<h2><i class="fas fa-sitemap"></i> Lista de Trabalhos</h2>
		<div class="table-responsive tb-respons">
			<div class="row table-color">
				<div class="col-proj">
					<span>Nome:</span>
				</div><!--col-depoimento-->
				<div class="col-proj">
					<span>Imagem:</span>
				</div><!--col-depoimento-->
				<div class="col-proj">
					<span>Editar:</span>
				</div><!--col-depoimento-->
				<div class="col-proj">
					<span>Excluir:</span>
				</div><!--col-depoimento-->
				<div class="clear"></div>
			</div><!--row-->
			<?php 
				if(isset($_GET['excluir'])){
					$idExcluir = intval($_GET['excluir']);
					$projImg = Painel::listar('tb_site.projetos','id = ?',array($idExcluir));
					$img = $projImg['imagem'];
					Painel::deleteFile($img);
					Painel::deletarRegistro('tb_site.projetos',$idExcluir);
					Painel::redirecionar(INCLUDE_PATH_PAINEL.'adicionar-projeto');
				}

				$listaProjetos = Painel::selecionarTudo('tb_site.projetos');
				foreach ($listaProjetos as $key => $value) {
			?>
			<div class="row color-texto">
				<div class="col-proj">
					<span><?php echo $value['nome']; ?></span>
				</div><!--col-depoimento-->
				<div class="col-proj">
					<span><img style="width:60px" src="<?php echo INCLUDE_PATH_PAINEL ?>/uploads/<?php echo $value['imagem']; ?>"></span>
				</div><!--col-depoimento-->
				<div class="col-proj">
					<span><a class="btn-editar" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-projeto?id=<?php echo $value['id']; ?>"><i class="far fa-edit"></i> Editar</a></span>
				</div><!--col-depoimento-->
				<div class="col-proj">
					<span><a actionBtn="deletar" class="btn-excluir" href="<?php echo INCLUDE_PATH_PAINEL; ?>adicionar-projeto?excluir=<?php echo $value['id']; ?>"><i class="far fa-trash-alt"></i> Excluir</a></span>
				</div><!--col-depoimento-->
				<div class="clear"></div>
			</div><!--row-->
			<?php } ?>
		</div><!--table-responsive-->
		
	</div><!-- box-content -->
</div><!-- container -->
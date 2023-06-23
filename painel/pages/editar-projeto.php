<?php 
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$projeto = Painel::listar('tb_site.projetos','id = ?',array($id));
	}else{
		Painel::alert('erro','Você precisa passar o id');
		die();
	}
?>
<div class="container">
	<div class="box-content objeto-color">
		<h2><i class="fas fa-sitemap"></i> Editar projeto</h2>
		
		<form method="post" enctype="multipart/form-data">

			<?php 
				if(isset($_POST['acao'])){
					$nome_site = $_POST['nome_site'];
					$link_site = $_POST['link_site'];
					$imagem = $_FILES['imagem'];
					$imagem_atual = $_POST['imagem_atual'];

					if($imagem['name'] != ''){	
						if(Painel::imagemValida($imagem) ==  false){
							Painel::alert('erro','A imagem não é válida!');
						}else{
							Painel::deleteFile($imagem_atual);
							$imagem = Painel::uploadFile($imagem);
							$sql = MySql::conectar()->prepare("UPDATE `tb_site.projetos` SET nome = ?, link_site = ?, imagem = ? WHERE id = ? ");
							if($sql->execute(array($nome_site,$link_site,$imagem,$id))){
								Painel::alert('sucesso','Trabalho atualizado com sucesso!');
							}else{
								Painel::alert('erro','Erro ao atualizar trabalho!');
							};
						}
					}else{
						$imagem = $imagem_atual;
						$sql = MySql::conectar()->prepare("UPDATE `tb_site.projetos` SET nome = ?, link_site = ?, imagem = ? WHERE id = ? ");
						if($sql->execute(array($nome_site,$link_site,$imagem,$id))){
							Painel::alert('sucesso','Trabalho atualizado com sucesso!');
						}else{
							Painel::alert('erro','Algum erro ocorreu, pode ser que a imagem esteja vazia!');
						}
					}
					$projeto = Painel::listar('tb_site.projetos','id = ?',array($id));
					
				}
			?>

			<div class="form-group">
				<label>Nome do trabalho:</label>
				<input type="text" name="nome_site" value="<?php echo $projeto['nome'] ?>" />
			</div><!--form-group-->

			<div class="form-group">
				<label>Link:</label>
				<textarea name="link_site"><?php echo $projeto['link_site'] ?></textarea>
			</div><!--form-group-->

			<div class="form-group">
				<label>Imagem do trabalho:</label>
				<input type="file" name="imagem" />
				<input type="hidden" name="imagem_atual" value="<?php echo $projeto['imagem'] ?>">
			</div><!--form-group-->
<!-- -------------------------------------------------------------------------------------------------- -->
			<div class="form-group">
				<input type="hidden" name="id" value="<?php echo $projeto['id']; ?>" />
				<input type="hidden" name="nome_tabela" value="tb_site.projetos" />
				<input class="btn-color" type="submit" name="acao" value="Cadastrar!">
			</div><!--form-group-->
		</form><!-- form -->
	</div><!-- box-content -->
</div><!-- container -->
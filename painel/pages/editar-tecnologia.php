<?php 
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$tecnologia = Painel::listar('tb_site.tecnologia','id = ?',array($id));
	}else{
		Painel::alert('erro','Você precisa passar o id');
		die();
	}
?>
<div class="container">
	<div class="box-content objeto-color">
		<h2><i class="fas fa-code"></i> Editar tecnologia</h2>
		
		<form method="post" enctype="multipart/form-data">
			<?php
				if(isset($_POST['acao'])){
					if(Painel::atualizarBanco($_POST)){
						Painel::alert('sucesso','tecnologia editado com sucesso!');
						$tecnologia = Painel::listar('tb_site.tecnologia','id = ?',array($id));
					}else{
						Painel::alert('erro','Campos vazios não são permitidos!');
					}
				}
			?>
			<div class="form-group">
				<label>Ícone tecnologia:</label>
				<input type="text" name="icone" value='<?php echo $tecnologia['icone']; ?>' />
			</div><!--form-group-->

			<div class="form-group">
				<label>Título tecnologia:</label>
				<input type="text" name="titulo" value='<?php echo $tecnologia['titulo']; ?>' />
			</div><!--form-group-->

			<div class="form-group">
				<label>Descrição tecnologia:</label>
				<textarea name="descricao"><?php echo $tecnologia['descricao']; ?></textarea>
			</div><!--form-group-->

			<div class="form-group">
				<label>Link:</label>
				<textarea name="link"><?php echo $tecnologia['link']; ?></textarea>
			</div><!--form-group-->

			<div class="form-group">
				<input type="hidden" name="id" value="<?php echo $tecnologia['id']; ?>" />
				<input type="hidden" name="nome_tabela" value="tb_site.tecnologia" />
				<input class="btn-color" type="submit" name="acao" value="Cadastrar!">
			</div><!--form-group-->
		</form><!-- form -->
	</div><!-- box-content -->
</div><!-- container -->
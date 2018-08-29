<form action="editar" name="form_add" method="post">
	<input type="text" name="login" value="<?php echo $produto->login; ?>">
	<input type="password" name="senha" value="<?php echo $produto->senha; ?>">
	<input type="text" name="nome" value="<?php echo $produto->nome; ?>">	
	<input type="hidden" name="id" value="<?php echo $produto->id; ?>">
	<input type="submit" name="salvar">
</form>
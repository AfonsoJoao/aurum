<form action="<?php echo $admin->id; ?>" name="form_add" method="post">
	<input type="text" name="login" value="<?php echo $admin->login; ?>">
	<input type="password" name="senha" value="<?php echo $admin->senha; ?>">
	<input type="text" name="nome" value="<?php echo $admin->nome; ?>">	
	<input type="hidden" name="id" value="<?php echo $admin->id; ?>">
	<input type="submit" name="salvar">
</form>
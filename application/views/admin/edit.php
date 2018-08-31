<section class="invoice">
	<div class="row">
		<div class="col-xs-12">
			<h2 class="page-header">
				<i class="fa fa-globe"></i>Editar Administrador
			</h2>
		</div>
	</div>
	<form action="<?php echo base_url().'admin/editar/'.$admin->id; ?>"" name="form_add" method="post">
		<div class="row invoice-info">
			<div class="col-sm-10 invoice-col">
				<b>Informações Pessoais</b><br><br>
				<div class="input-group">
					<span class="input-group-addon">Nome</span>
					<input type="text" class="form-control" name="nome" value="<?php echo $admin->nome; ?>">
				</div>
				<br>         
			</div>
			<br><br>
			<div class="col-sm-5 invoice-col">
				<div class="input-group">
					<span class="input-group-addon">Login</span>
					<input type="text" class="form-control" name="login" value="<?php echo $admin->login; ?>" >
				</div>
			</div>  
			<div class="col-sm-5 invoice-col">
				<div class="input-group">
					<span class="input-group-addon">Senha</span>
					<input type="password" class="form-control" name="senha">
				</div><br> 
			</div>
		</div>
		<!--id-->
		<input type="hidden" name="id" value="<?php echo $admin->id; ?>">
		<div class="row no-print">
			<div>
				<button type="submit" class="btn btn-success pull-right" style="margin-left: 5px"><i class="fa fa-chevron-down" name="salvar">
					</i>Salvar
				</button>
				<button type="reset" class="btn btn-warning pull-right">
					<i class="fa fa-eraser"></i> Limpar Campos
				</button>
			</div>
		</div>
	</form>
</section>
<section class="invoice">
	<div class="row">
		<div class="col-xs-12">
			<h2 class="page-header">
				<i class="fa fa-globe"></i>Cadastrar Administrador
			</h2>
		</div>
	</div>
	<form action="salvar" name="form_add" method="post">
		<div class="row invoice-info">
			<div class="col-sm-6 invoice-col">
				<b>Informações Pessoais</b><br><br>
				<div class="input-group">
					<span class="input-group-addon">Nome</span>
					<input type="text" class="form-control" name="nomeAdmin" required="">
				</div><br>
				<div class="input-group">
					<span class="input-group-addon">Login</span>
					<input type="text" class="form-control" name="loginAdmin" required="">
				</div>
				<br>         
			</div>
			<br><br>
			<div class="col-sm-6 invoice-col">
				<div class="input-group">
					<span class="input-group-addon">Email</span>
					<input type="email" class="form-control" name="emailAdmin" placeholder="example@example.com" required="">
				</div><br>
				<div class="input-group">
					<span class="input-group-addon">Senha</span>
					<input type="password" class="form-control" name="senhaAdmin" required="">
				</div><br> 
			</div>
		</div>
		<div class="row no-print">
			<div>
				<button type="submit" class="btn btn-success pull-right" style="margin-left: 5px"><i class="fa fa-chevron-down" name="salvar">
					</i>Cadastrar
				</button>
				<button type="reset" class="btn btn-warning pull-right">
					<i class="fa fa-eraser"></i> Limpar Campos
				</button>
			</div>
		</div>
	</form>
</section>
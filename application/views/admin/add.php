<section class="invoice">
		      <!-- title row -->
		      <div class="row">
		        <div class="col-xs-12">
		          <h2 class="page-header">
		            <i class="fa fa-globe"></i>Cadastrar Administrador
		          </h2>
		        </div>
		        <!-- /.col -->
		      </div>
		      <!-- info row -->
		      <div class="row invoice-info">
		        <div class="col-sm-5 invoice-col">
		          <b>Informações Pessoais</b><br><br>
		           <div class="input-group">
		                <span class="input-group-addon">Nome</span>
		                <input type="text" class="form-control" name="nome">
		            </div><br>
		              
				<form action="salvar" name="form_add" method="post">            
				        </div><br><br>
				        <div class="col-sm-5 invoice-col">
				             <div class="input-group">
				                <span class="input-group-addon">Login</span>
				                <input type="text" class="form-control" name="login">
				            </div><br>
				        </div>
				        <!-- /.col -->    
				        <div class="col-sm-10 invoice-col">
				        		<div class="input-group">
				                <span class="input-group-addon">Senha</span>
				                <input type="password" class="form-control" nome="senha">
				            </div><br> 
				        </div>
				        <!-- /.col -->
				      </div>
				      <!-- /.row -->

				      <!-- Table row -->
				      <div class="row invoice-info">
				        <div class="col-sm-6">
				          
				        </div><br><br>
				        <div class="col-sm-2 invoice-col">
				                   
				        </div>
				        <div class="col-sm-4 invoice-col">
				            
				        </div>
				        <!-- /.col -->
				      </div>
				      <div class="row no-print">
				        <div>
				          <button type="submit" class="btn btn-success pull-right" style="margin-left: 5px"><i class="fa fa-chevron-down" name="salvar"></i>Cadastrar</button>
				          <button type="reset" class="btn btn-warning pull-right">
				            <i class="fa fa-eraser"></i> Limpar Campos
				          </button>
				        </div>
				      </div>
    </form>
      <!-- /.row -->
      <!-- this row will not appear when printing -->
      <br>
    </section>
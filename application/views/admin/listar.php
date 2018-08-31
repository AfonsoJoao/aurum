<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
      <div class="row">
              <div class="col-xs-12">
                  <h2 class="page-header">
                  <i class="fa fa-globe"></i>Administradores Cadastrados
              </div>
        <!-- /.col -->
      </div>
            <form action="<?php echo base_url().'admin/editar/'.$admin->id; ?>"" name="form_add" method="post">
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </form>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
              	<thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Nome</th>
	                  <th>Login</th>
	                  <th>Senha</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                	<?php foreach ($admins as $admin): ?>
                		<tr>
                			<td><?php echo $admin['id']; ?></td>
                			<td><?php echo $admin['nome']; ?></td>
                			<td><?php echo $admin['login']; ?></td>
                			<td><?php echo $admin['senha']; ?></td>
                			<td>
                        <button type="button" class="btn btn-primary btn-xs"><a href="<?php echo base_url().'admin/editar/'.$admin['id']; ?>"><i class="fa fa-pencil"></i></a></button>
                        <button type="button" class="btn btn-danger btn-xs"><a href="<?php echo base_url().'admin/apagar/'.$admin['id']; ?>"><i class="fa fa-trash"></i></a></button>  
                        <button type="button" class="btn btn-info btn-xs"><a href=""><i class="fa fa-eye"></i></a></button>  
                      </td>
                		</tr>
                	<?php endforeach ?>
                </tbody>
                
              </table>
            </div>
             <div class="row no-print">
      </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>


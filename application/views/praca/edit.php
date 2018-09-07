<form action="<?php echo base_url('praca/editar/').$praca['idPraca'];?>" name="form_add" method="post">
<section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i>Editar Praça
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-10 invoice-col">
          <b>Informações Pessoais</b><br><br>
           <div class="input-group">
                <span class="input-group-addon">Nome</span>
                <input type="text"  class="form-control" placeholder="Praça" required="" value="<?php echo$praca['nome']; ?>" name="nome">
            </div><br>
        </div><br><br>
        <div class="col-sm-6 invoice-col">
  
        </div>
        <!-- /.col -->    
        <div class="col-sm-4 invoice-col">

        </div>
        <!-- /.col -->
        
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row invoice-info">
        <div class="col-sm-10">
          <b>Observações</b><br><br>
           <div class="form-group">
                  <textarea style="resize: none" class="form-control" rows="5" placeholder="Observações..." name="observacao"> <?php echo $praca['observacao']; ?> </textarea>
            </div>
        </div><br><br>
      </div>
      <!-- /.row -->
      <!-- this row will not appear when printing -->
      <br>
      <div class="row no-print">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-success pull-right" style="margin-left: 5px"><i class="fa fa-chevron-down" name="salvar">
          </i>Cadastrar
        </button>
        <button type="reset" class="btn btn-warning pull-right">
          <i class="fa fa-eraser"></i> Limpar Campos
        </button>
        </div>
      </div>
    </section>
 
</div>
</div>
</section>
</form>
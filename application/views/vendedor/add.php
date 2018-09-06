<section class="invoice">
  <!-- title row -->
  <div class="row">
    <div class="col-xs-12">
      <h2 class="page-header">
        <i class="fa fa-globe"></i> Cadastrar Vendedor
      </h2>
    </div>
  </div>
  <form action="" method="post">
    <div class="row invoice-info">
      <div class="col-sm-6 invoice-col">
        <b>Informações Pessoais</b><br><br>
        <div class="input-group">
          <span class="input-group-addon">
            Nome
          </span>
          <input type="text" class="form-control" name="nomeVendedor" required="">
        </div><br>
      </div><br><br>
      <div class="col-sm-6 invoice-col">
        <div class="input-group">
          <span class="input-group-addon">
            Email
          </span>
          <input type="email" class="form-control" name="emailVendedor" placeholder="example@example.com" required="">
        </div><br>  
      </div>
    </div>
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <div class="input-group">
          <span class="input-group-addon">
            RG
          </span>
          <input type="text" class="form-control" name="rgVendedor" required="">
        </div>           
      </div>
      <div class="col-sm-4 invoice-col">
        <div class="input-group">
          <span class="input-group-addon">
            CPF
          </span>
          <input type="text" class="form-control" name="cpfVendedor" required="">
        </div>           
      </div>
      <div class="col-sm-4 invoice-col">
        <div class="input-group">
          <span class="input-group-addon">
            Telefone
          </span>
          <input type="text" class="form-control" name="telefoneVendedor" required="">
        </div><br>
      </div>   
    </div>      
    <div class="row invoice-info">
      <div class="col-sm-6">
        <b>Endereço</b><br><br>
        <div class="input-group">
          <span class="input-group-addon">
            Rua
          </span>
          <input type="text" class="form-control" required="">
        </div><br>
        <div class="input-group">
          <span class="input-group-addon">
            Cidade
          </span>
          <input type="text" class="form-control" required="">
        </div><br>
      </div><br><br>
      <div class="col-sm-2 invoice-col">
        <div class="input-group">
          <span class="input-group-addon">
            N°
          </span>
          <input type="text" class="form-control" required="">
        </div><br>
        <div class="input-group">
          <span class="input-group-addon">
            UF
          </span>
          <div class="form-group">
            <select class="form-control" id="sel1" required="">

            </select>
          </div>
        </div><br>          
      </div>
      <div class="col-sm-4 invoice-col">
        <div class="input-group">
          <span class="input-group-addon">
            Bairro
          </span>
          <input type="text" class="form-control" required="">
        </div><br>
        <div class="input-group">
          <span class="input-group-addon">
            Complemento
          </span>
          <input type="text" class="form-control">
        </div><br>
      </div>
    </div><br>
    <div class="row no-print">
      <div class="col-xs-12">
        <button type="button" class="btn btn-success pull-right"><i class="fa fa-chevron-down"></i> Cadastrar
          <button type="button" class="btn btn-warning pull-right" style="margin-right: 5px;">
            <i class="fa fa-eraser"></i> Limpar Campos
          </button>
        </div>
      </div>
    </form>
  </section>                
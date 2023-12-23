<?php
// Configuração do diretório utilizando o dirname(__DIR__).
include_once dirname(__DIR__, 2) . '/Resource/dataview/modeloEquipamentoDataview.php';
?>
<!DOCTYPE html>
<html>

<head>
  <?php
  include_once PATH . 'Template/_includes/_head.php';
  ?>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
  <!-- Site wrapper -->
  <div class="wrapper dark-mode">
    <!-- Navbar -->
    <?php
    include_once PATH . 'Template/_includes/_menu.php';
    include_once PATH . 'Template/_includes/_topo.php';
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 style="color: #00BFFF;">Gerenciar modelo de equipamentos</h1>
              <h6>Aqui você gerencia os modelos de equipamentos cadastrados</h6>
            </div>
          </div>
        </div>
        <hr>
      </section>
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Aqui você gerencia todos os modelos de equipamentos cadastrados</h3>
          </div>
          <div class="card-body">
            <form id="formID" action="gerenciar_modeloequipamento.php" method="post">
              <div class="form-group">
                <label>Modelo do equipamento</label>
                <input type="text" class="form-control obg" name="nome_modelo" id="nome_modelo" placeholder="Digite o tipo de equipamento ... ">
              </div>
              <button type="button" name="btn_cadastrar" onclick="CadastrarModeloEquipamentoAjax('formID')" class="btn btn-success">Gravar</button>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
        <section class="content">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Modelos cadastrados</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Alterar ou excluir os equipamentos</h3>
                    </div>
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover" id="tableResult">

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
      </section>
    </div>
    <?php
    include_once PATH . 'Template/_includes/_footer.php';
    ?>
  </div>
  <?php
  include_once PATH . 'Template/_includes/_scripts.php';
  include_once PATH . 'Template/_includes/_msg.php';
  ?>

  <script src="../../Resource/ajax/modeloEquipamentoAjax.js"></script>
  <script>
    DetalharModeloEquipamento();  
  </script>
</body>

</html>
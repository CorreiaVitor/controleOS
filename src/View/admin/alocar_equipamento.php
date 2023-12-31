<?php
// Configuração do diretório utilizando o dirname(__DIR__).
include_once dirname(__DIR__, 3) . '/vendor/autoload.php';
?>
<!DOCTYPE html>
<html>

<head>
  <?php
  include_once PATH . 'Template/_includes/_head.php'
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
              <h2 style="color: #00BFFF;">Alocar equipamento</h2>
              <h6>Aqui você aloca um equipamento ao setor especifico</h6>
            </div>
          </div>
        </div>
        <hr>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Selecione o equipamento</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <form id="formCAD" action="alocar_equipamento.php" method="post">
                    <div class="form-group">
                      <label>Setor</label>
                      <select name="setor" id="setor" class="form-control obg" style="width: 100%;">

                      </select>
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="renderizar" id="renderizar" value="option">
                      <label>Equipamentos</label>
                      <select name="equipamento" id="equipamento" class="form-control obg" style="width: 100%;">

                      </select>
                    </div>
                    <button type="submit" name="btn_alocar" class="btn btn-success">Gravar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php
    include_once PATH . 'Template/_includes/_footer.php'
    ?>

  </div>

  <?php
  include_once PATH . 'Template/_includes/_scripts.php';
  include_once PATH . 'Template/_includes/_msg.php';
  ?>

</body>

</html>
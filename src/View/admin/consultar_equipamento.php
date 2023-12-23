<?php
// Configuração do diretório utilizando o dirname(__DIR__).
include_once dirname(__DIR__, 3) . '/vendor/autoload.php';
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
        <?php
        include_once PATH . 'Template/_includes/_menu.php';
        include_once PATH . 'Template/_includes/_topo.php';
        ?>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 style="color: #00BFFF;">Consultar Equipamento</h1>
                            <h6>Aqui você faz a consulta dos seus equipamentos</h6>
                        </div>
                    </div>
                </div>
                <hr>
            </section>
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pesquise o tipo de equipamento</h3>
                    </div>
                    <div class="card-body">
                        <form action="consultar_equipamento.php" method="post">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tipo equipamento</label>
                                            <select name="tipoEqui" id="tipoEqui" class="form-control" onchange="FiltrarDadosEquipamentoAJAX()">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Modelo equipamento</label>
                                            <select name="modeloEqui" id="modeloEqui" class="form-control" onchange="FiltrarDadosEquipamentoAJAX()">

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Equipamento cadastrados</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Alterar ou excluir os equipamentos</h3>
                                        <div class="card-tools">
                                            <div class="input-group input-group-sm" style="width: 180px;">
                                                <input type="text" name="nome" id="nome" class="form-control float-right" onkeyup="FiltrarDadosEquipamentoAJAX()" placeholder="Digite o equipamento ...">

                                                <!-- <div class="input-group-append">
                                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover" id="tableResult">
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php
        include_once PATH . 'Template/_includes/_footer.php';
        ?>
    </div>

    <?php
    include_once PATH . 'Template/_includes/_scripts.php';
    ?>

</body>

</html>
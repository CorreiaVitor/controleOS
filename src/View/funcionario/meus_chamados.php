<?php
include_once dirname(__DIR__, 3) . '/vendor/autoload.php';
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    include_once PATH . 'Template/_includes/_head.php';
    ?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
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
                            <h1 style="color: #00BFFF;">Meus chamados</h1>
                            <h6>Consulte todos seus chamados e acompanhe os atendimentos</h6>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Aqui você pode Consultar todos os seus chamados</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <form action="" method="post">
                                <label>Selecione o setor</label>
                                <select name="" id="" class="form-control">
                                    <option value="0">Selecionar</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </form>
                        </div>
                        <a href="#" class="btn btn-success">Pesquisar</a>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Consultar todos os chamados</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Resultado encontrado</h3>
                                        <div class="card-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" name="table_search" class="form-control float-right" placeholder="Pesquisar por ...">

                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Ação</th>
                                                    <th>Data Aberta</th>
                                                    <th>Funcionário</th>
                                                    <th>Equipamento</th>
                                                    <th>Problema</th>
                                                    <th>Data Atendimento</th>
                                                    <th>Técnico</th>
                                                    <th>Data de encerramento</th>
                                                    <th>Laudo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="btn btn-danger btn-xs">Remover</a>
                                                    </td>
                                                    <td>(Data Aberta)</td>
                                                    <td>(Funcionario)</td>
                                                    <td>(Equipamento)</td>
                                                    <td>(Problema)</td>
                                                    <td>(Atendimento)</td>
                                                    <td>(Técnico)</td>
                                                    <td>(Encerramento)</td>
                                                    <td>(laudo)</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        </section>

        <?php
        include_once PATH . 'Template/_includes/_footer.php';
        ?>

    </div>
    <?php
    include_once PATH . 'Template/_includes/_scripts.php';
    ?>
</body>

</html>
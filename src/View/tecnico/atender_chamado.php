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
                            <h1 style="color: #00BFFF;">Atender chamado</h1>
                            <h6>Faça os atendimentos aqui</h6>
                        </div>
                    </div>
                    <hr>
                </div>
            </section>
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Realize um novo chamada</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Data</label>
                                        <input disabled value="" name="" class="form-control" placeholder="Digite aqui...">
                                    </div>
                                    <div class="form-group">
                                        <label>Setor</label>
                                        <input disabled value="" name="" class="form-control" placeholder="Digite aqui...">
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Funcionário</label>
                                        <input disabled value="" name="" class="form-control" placeholder="Digite aqui...">
                                    </div>
                                    <div class="form-group">
                                        <label>Equipamento</label>
                                        <input disabled value="" name="" class="form-control" placeholder="Digite aqui...">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Descrição do problema</label>
                                        <textarea disabled name="" id="" class="form-control" cols="30" rows="5" placeholder="Deixe uma descrição"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Laudo</label>
                                        <textarea name="" id="" class="form-control" cols="30" rows="5" placeholder="Deixe uma descrição"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
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
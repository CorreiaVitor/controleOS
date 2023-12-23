<?php
    include_once dirname(__DIR__,3) . '/vendor/autoload.php';
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
                            <h1 style="color: #00BFFF;">Mudar Senha</h1>
                            <h6>Altere sua senha aqui</h6>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Digite todos os campos</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Senha atual</label>
                                <input type="password" class="form-control" name="" value="" placeholder="Digite sua senha atual...">
                            </div>
                            <div class="form-group">
                                <label>Nova senha</label>
                                <input type="password" class="form-control" name="" value="" placeholder="Digite uma nova senha...">
                            </div>
                            <div class="form-group">
                                <label>Repetir senha</label>
                                <input type="password" class="form-control" name="" value="" placeholder="Repetir senha...">
                            </div>
                        </form>
                        <a href="#" class="btn btn-success">Gravar</a>
                    </div>
                </div>
            </section>
        </div>
        <?php
        include_once PATH . 'Template/_includes/_footer.php';
        ?>
        <!-- /.control-sidebar -->
    </div>
    <?php
    include_once PATH . 'Template/_includes/_scripts.php';
    ?>
</body>

</html>
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
                            <h1 style="color: #00BFFF;">Meus Dados</h1>
                            <h6>Aqui você poderá cadastrar seus equipamentos</h6>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Digite todos os seus dados</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" name="" id="" value="" placeholder="Digite seu nome...">
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control" name="" id="" value="" placeholder="Digite seu e-mail...">
                                </div>
                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input type="tel" class="form-control" name="" id="" value="" placeholder="Digite seu telefone...">
                                </div>
                                <label>Endereço</label>
                                <input type="text" class="form-control" name="" id="" value="" placeholder="Digite seu endereço...">
                            </form>
                        </div>
                        <a href="#" class="btn btn-success">Gravar</a>
                    </div>
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

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
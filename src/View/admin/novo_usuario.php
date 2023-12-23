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
    <div class="wrapper dark-mode">

        <?php
        include_once PATH . 'Template/_includes/_menu.php';
        include_once PATH . 'Template/_includes/_topo.php'
        ?>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 style="color: #00BFFF;">Novo usuário</h1>
                            <h6>Aqui você insere um novo usuário</h6>
                        </div>
                    </div>
                </div>
                <hr>
            </section>
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <div class="form-group">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Selecionar</option>
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Setor</label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Selecionar</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" name="" id="" value="" placeholder="Digite aqui...">
                                </div>
                                <div class="form-group">
                                    <label>Sobrenome</label>
                                    <input type="text" class="form-control" name="" id="" value="" placeholder="Digite aqui...">
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control" name="" id="" value="" placeholder="Digite aqui...">
                                </div>
                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input type="tel" class="form-control" name="" id="" value="" placeholder="Digite aqui...">
                                </div>
                                <div class="form-group">
                                    <label>Endereço</label>
                                    <input type="text" class="form-control" name="" id="" value="" placeholder="Digite aqui...">
                                </div>
                                <a href="#" class="btn btn-success">Gravar</a>
                            </form>
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
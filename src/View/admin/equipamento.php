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
                            <h1 style="color: #00BFFF;">Equipamento</h1>
                        </div>
                    </div>
                </div>
                <hr>
            </section>
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <form id="formID" action="equipamento.php" method="post">
                            <div class="form-group">
                                <label>Tipo de equipamento</label>
                                <select name="tipoEqui" id="tipoEqui" class="form-control obg">
                                    <option value="">Selecionar</option>
                                    <option value="1">Tipo equipamento</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Tipo de modelo</label>
                                <select name="modeloEqui" id="modeloEqui" class="form-control obg">
                                    <option value="">Selecionar</option>
                                    <option value="1">Modelo equipamento</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Identificação</label>
                                <input type="text" class="form-control obg" name="identificacao" id="identificacao" placeholder="Digite a identificação...">
                            </div>
                            <div class="form-group">
                                <label>Descrição</label>
                                <textarea name="descricao" id="descricao" class="form-control obg" cols="30" rows="2" placeholder="Deixe uma descrição"></textarea>
                            </div>
                            <button type="submit" name="btn_gravar" onclick="return validarCamposJS('formID')" class="btn btn-success">Cadastrar</button>
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
    include_once PATH . 'Template/_includes/_msg.php';
    ?>

</body>

</html>
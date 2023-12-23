    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../index3.html" class="brand-link">
        <img src="../../Template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../Template/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item has-treeview">
              <a href="admin" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Administrador
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item has-treeview">
                  <a href="|#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Equipamento
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../../View/admin/equipamento.php" class="nav-link">
                        <p>Novo equipamento</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../../View/admin/consultar_equipamento.php" class="nav-link">
                        <p>Consultar equipamento</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../../View/admin/gerenciar_modeloequipamento.php" class="nav-link">
                        <p>Modelo equipamento</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../../View/admin/gerenciartipos_equipamento.php" class="nav-link">
                        <p>Tipo equipamento</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../../View/admin/alocar_equipamento.php" class="nav-link">
                        <p>Alocar equipamento</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../../View/admin/remover_equipamento.php" class="nav-link">
                        <p>Remover equipamento</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../../View/admin/setor_equipamento.php" class="nav-link">
                        <p>Setor equipamento</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Usuário
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../../View/admin/novo_usuario.php" class="nav-link">
                        <p>Novo usuário</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../../View/admin/consultar_usuario.php" class="nav-link">
                        <p>Consultar usuários</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-pen"></i>
                <p>
                  Técnico
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../View/tecnico/consultar_chamados.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Consultar chamados</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../View/tecnico/atender_chamado.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Atender chamdados</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../View/tecnico/meus_dados.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Meus dados</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../View/tecnico/mudar_senha.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Mudar senha</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="funcionario" class="nav-link">
                <i class="nav-icon fas fa-briefcase"></i>
                <p>
                  Funcionário
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../View/funcionario/novo_chamado.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Novo chamado</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../View/funcionario/meus_chamados.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Meus chamdos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../View/funcionario/meus_dados.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>meus dados</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../View/funcionario/mudar_senha.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Mudar senha</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
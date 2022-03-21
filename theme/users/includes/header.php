      <!-- HEADER MOBILE-->
      <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
          <div class="container-fluid">
            <div class="header-mobile-inner">
              <a class="logo" href="index.html">
                <img src="images/icon/logo.png" alt="CoolAdmin" />
              </a>
              <button class="hamburger hamburger--slider" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <nav class="navbar-mobile">
          <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
              <li>
                <a href="index.html">
                  <i class="fas fa-home"></i>Página Inicial</a
                >
              </li>
              <li>
                <a href="database.html">
                  <i class="fas fa-table"></i>Databases</a
                >
              </li>
              <li>
                <a href="providers.html">
                  <i class="far fa-check-square"></i>Providers</a
                >
              </li>
              <li>
                <a href="schedules.html">
                  <i class="fas fa-calendar-alt"></i>Schedules</a
                >
              </li>
              <li>
                <a href="../index.html">
                  <i class="fas fa-map-marker-alt"></i>Sair</a
                >
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- END HEADER MOBILE-->

      <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar d-none d-lg-block" >
        <div class="logo dash-aside-bg" style="background: #835AFD !important"></div>
        <div class="menu-sidebar__content js-scrollbar1 bg-user-estacionamento"
        style="background: #835AFD !important"
        >
          <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
              <li class="<?= $_GET['id'] == 'home' ? 'active' : '' ?>">
                <a href="index.php?id=home">
                  <i class="fas fa-home"></i>Página Inicial</a
                >
              </li>
              <li class="<?= $_GET['id'] == 'solicitar-vaga' ? 'active' : '' ?>">
                <a href="cadastro.php?id=solicitar-vaga">
                  <i class="fas fa-database"></i>Solicitar vaga</a
                >
              </li>
              <li class="<?= $_GET['id'] == 'disponiveis' ? 'active' : '' ?>">
                <a href="disponiveis.php?id=disponiveis">
                  <i class="fab fa-superpowers"></i>Espaços Disponíveis</a
                >
              </li>
              <li class="<?= $_GET['id'] == 'perfil' ? 'active' : '' ?>">
                <a href="disponiveis.php?id=disponiveis">
                  <i class="fab fa-superpowers"></i>Meu Perfil</a
                >
              </li>
            
              <li>
                <a href="?logout=true">
                  <i class="fas fa-power-off"></i>Sair</a
                >
              </li>
            </ul>
          </nav>
          <div class="stans-office">
            <h2>Stans Office</h2>
          </div>
        </div>
      </aside>
      <!-- END MENU SIDEBAR-->
<!-- <header>
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">JUANSE</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="navbar-collapse collapse" id="navbarCollapse" style="">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>

        </div>
    </nav>
</header> -->



<header>
  <nav class="navbar navbar-expand-md navbar-dark">
    <div class="container-fluid">

      <a class="navbar-brand" href="<?php echo base_url('/') ?>">JUANSE</a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
              aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarCollapse" style="">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url('/') ?>"><i class="nav-icon fa-solid fa-house"></i>Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('contacto') ?>"><i class="nav-icon fa-solid fa-envelope"></i>Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('comercializacion') ?>"><i class="nav-icon fa-solid fa-hand-holding-dollar"></i>Comercialización</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('terminosyusos') ?>"><i class="nav-icon fa-solid fa-file-lines"></i>Términos y Usos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('quienessomos') ?>"><i class="nav-icon fa-solid fa-users"></i>Quienes Somos</a>
          </li>
        </ul>

        <form class="d-flex">
          <input class="form-control me-3" type="search" placeholder="Buscar" aria-label="Search" style="border-radius: 16px;">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>

    </div>
  </nav>
</header>






<!-- <header>
        <div class="header-div">
            <a href="<?php echo base_url('/') ?>">JUANSE</a>

            <input type="text" class="header-input" placeholder="¿Qué esta buscando?">
            <button type="submit" class="header-div-search fa-solid fa-magnifying-glass"></button>
            <button class="header-div-bars fa-solid fa-bars"></button>
        </div>

        <nav class="header-nav">
            <ul>
                <li><a href="<?php echo base_url('/') ?>"><i class="fa-solid fa-house"></i> Inicio</a></li>
                <li><a href="<?php echo base_url('contacto') ?>"><i class="fa-solid fa-envelope"></i> Contacto</a></li>
                <li><a href="<?php echo base_url('comercializacion') ?>"><i class="fa-solid fa-hand-holding-dollar"></i>Comercialización</a></li>
                <li><a href="<?php echo base_url('terminosyusos') ?>"><i class="fa-solid fa-file-lines"></i> Términos y Usos</a></li>
                <li><a href="<?php echo base_url('quienessomos') ?>"><i class="fa-solid fa-users"></i> Quienes Somos</a></li>
            </ul>
        </nav>
</header> -->
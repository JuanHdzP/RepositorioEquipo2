<!-- <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">Inicio</a>
        <a class="navbar-brand" href="/category">Categorias</a>
      </div>
    </nav>
  </div> -->
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="" target="_blank">
        <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Sistema Libreria</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <li class="nav-item">
          @if (isset($pagname) && $pagname == 'Tablero')
            <a class="nav-link text-white active bg-gradient-primary" href="/">
          @else
            <a class="nav-link text-white" href="/">
          @endif
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Tablero</span>
          </a>
        </li>

        <li class="nav-item">
          @if (isset($pagname) && $pagname == 'Libros')
            <a class="nav-link text-white active bg-gradient-primary" href="/libro">
          @else
            <a class="nav-link text-white" href="/libro">
          @endif
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Libros</span>
          </a>
        </li>
        
        <li class="nav-item">
          @if (isset($pagname) && $pagname == 'Editoriales')
            <a class="nav-link text-white active bg-gradient-primary" href="/editorial">
          @else
            <a class="nav-link text-white" href="/editorial">
          @endif
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Editoriales</span>
          </a>
        </li>

        <li class="nav-item">
          @if (isset($pagname) && $pagname == 'Temas')
            <a class="nav-link text-white active bg-gradient-primary" href="/temas">
          @else
            <a class="nav-link text-white" href="/tema">
          @endif
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Temas</span>
          </a>
        </li>

        <li class="nav-item">
          @if (isset($pagname) && $pagname == 'Usuarios')
            <a class="nav-link text-white active bg-gradient-primary" href="/user">
          @else
            <a class="nav-link text-white" href="/user">
          @endif
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">Usuarios</span>
          </a>
        </li>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
@include('Layout/navBar')


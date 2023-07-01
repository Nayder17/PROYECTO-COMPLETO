<div class="container">
  <header class="border-bottom lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <img src="/img/logo.jpg" alt="" width="100" height="100">
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">MUNICIPALIDAD PROVINCIAL LEONCIO PRADO</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Iniciar sesión</a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Registrarse</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-3 border-bottom">
    <nav class="nav nav-underline justify-content-between">
      <a class="nav-item nav-link link-body-emphasis active">ESTABLECIMIENTOS</a>
      <a class="nav-item nav-link link-body-emphasis" href="{{ route('hotel') }}">HOTELES</a>
      <a class="nav-item nav-link link-body-emphasis" href="{{ route('restaurant') }}">RESTAURANTES</a>
      <a class="nav-item nav-link link-body-emphasis" href="{{ route('store') }}">TIENDAS</a>
      <a class="nav-item nav-link link-body-emphasis" href="{{ route('place') }}">DESTINOS TURISTICOS</a>
      <a class="nav-item nav-link link-body-emphasis" href="{{ route('session') }}">CAPACITACIONES</a>
    </nav>
  </div>
</div>
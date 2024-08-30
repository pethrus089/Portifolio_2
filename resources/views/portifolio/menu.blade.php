
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Portifólio</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link fw-bold py-1 px-0 {{ request()->routeIs('portifolio.index') ? 'active' : '' }}" aria-current="page" href="{{route('portifolio.index')}}">Home</a>
        <a class="nav-link fw-bold py-1 px-0 {{ request()->routeIs('portifolio.tecnologias') ? 'active' : '' }} " href="{{route('portifolio.tecnologias')}}">Tecnologias</a>
        <a class="nav-link fw-bold py-1 px-0 {{ request()->routeIs('portifolio.projetos') ? 'active' : '' }} " href="{{route('portifolio.projetos')}}">Projetos</a>
      </nav>
    </div>
  </header>



  
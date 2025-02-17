<!doctype html>
<html lang="pt-br" data-bs-theme="auto">

<head>
  <script src="assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>Exemplo site</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel-rtl/">



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="assets/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
      display: block !important;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="../Viwes/Filmes/www.w3.org/2000/svg" class="d-none">
  <symbol id="check2" viewBox="0 0 16 16">
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
  </symbol>
  <symbol id="circle-half" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
  </symbol>
  <symbol id="moon-stars-fill" viewBox="0 0 16 16">
    <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
    <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
  </symbol>
  <symbol id="sun-fill" viewBox="0 0 16 16">
    <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
  </symbol>
  </svg>

  <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="" aria-label="Toggle theme (auto)">
      <svg height="40px" width="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 0 58 58" xml:space="preserve">
        <g>
          <path style="fill:#2CB742;" d="M0,58l4.988-14.963C2.457,38.78,1,33.812,1,28.5C1,12.76,13.76,0,29.5,0S58,12.76,58,28.5
		S45.24,57,29.5,57c-4.789,0-9.299-1.187-13.26-3.273L0,58z" />
          <path style="fill:#FFFFFF;" d="M47.683,37.985c-1.316-2.487-6.169-5.331-6.169-5.331c-1.098-0.626-2.423-0.696-3.049,0.42
		c0,0-1.577,1.891-1.978,2.163c-1.832,1.241-3.529,1.193-5.242-0.52l-3.981-3.981l-3.981-3.981c-1.713-1.713-1.761-3.41-0.52-5.242
		c0.272-0.401,2.163-1.978,2.163-1.978c1.116-0.627,1.046-1.951,0.42-3.049c0,0-2.844-4.853-5.331-6.169
		c-1.058-0.56-2.357-0.364-3.203,0.482l-1.758,1.758c-5.577,5.577-2.831,11.873,2.746,17.45l5.097,5.097l5.097,5.097
		c5.577,5.577,11.873,8.323,17.45,2.746l1.758-1.758C48.048,40.341,48.243,39.042,47.683,37.985z" />
        </g>
      </svg>
      <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
    </button>
    <!--
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
          <svg class="bi me-2 opacity-50" width="1em" height="1em">
            <use href="#sun-fill"></use>
          </svg>
          Light
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
          <svg class="bi me-2 opacity-50" width="1em" height="1em">
            <use href="#moon-stars-fill"></use>
          </svg>
          Dark
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
          <svg class="bi me-2 opacity-50" width="1em" height="1em">
            <use href="#circle-half"></use>
          </svg>
          Auto
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
    </ul>
  -->
  </div>


  <header data-bs-theme="dark">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="تبديل التنقل">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="container-fluid">
            <div class="row justify-content-between">
              <div class="col-6">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Produtos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">História</a>
                  </li>
                </ul>
              </div>
              <div class="col-4">
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Pesquise" aria-label="Pesquise">
                  <button class="btn btn-outline-success" type="submit">Pesquise</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>

    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" style="height: 62vh; overflow-x: hidden;">
          <img class="bd-placeholder-img" style="width: 100%; height: 100%; object-fit: cover; " aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" src="assets/dist/imgs/pexels-padrinan-1111367.jpg" alt="...">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1 style="color: white;">Seu produto Aqui</h1>
              <p style="color: white;" class="opacity-75">Descriçãó sobre seu produto. Detalhes e muito mais.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Conversar com o Vendedor</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="height: 62vh; overflow-x: hidden;">
          <img class="bd-placeholder-img" style="width: 100%; height: 100%; object-fit: cover; " aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" src="assets/dist/imgs/pexels-cottonbro-4066295.jpg" alt="...">
          <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
          <div class="container">
            <div class="carousel-caption text-start">
              <h1 style="color: white;">Seu produto Aqui</h1>
              <p style="color: white;" class="opacity-75">Descrição sobre seu prod9uto. Detalhes e muito mais.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Conversar com o Vendedor</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="height: 62vh; overflow-x: hidden;">
          <img class="bd-placeholder-img" style="width: 100%; height: 100%; object-fit: cover; " aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" src="assets/dist/imgs/pexels-pixabay-326576.jpg" alt="...">
          <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
          <div class="container">
            <div class="carousel-caption text-start">
              <h1 style="color: white;">Seu produto Aqui</h1>
              <p style="color: white;" class="opacity-75">Descrição sobre seu prod9uto. Detalhes e muito mais.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Conversar com o Vendedor</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">السابق</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">التالي</span>
      </button>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->



    <div class="container marketing" style="margin-top: 150px;">

      <!-- Three columns of text below the carousel -->
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 text-align-center" style="margin-bottom: 20px; text-align: center; display: flex; justify-content: center;">
          <div class="card" style="width: 30rem;">
            <img src="assets/dist/imgs/pexels-pixabay-260405.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Nome Produto</h5>
              <p class="card-text"> Descrição breve sobre o produto ou serviço disponibilizado.
              </p>
              <p><a class="btn btn-outline-success" href="#">Conversar com o Vendedor</a></p>
            </div>
          </div>
        </div><!-- /.col-lg-3 text-align-center  style="margin-bottom: 20px; text-align: center;"-->

        <div class="col-lg-6 text-align-center" style="margin-bottom: 20px; text-align: center; display: flex; justify-content: center;">
          <div class="card" style="width: 30rem;">
            <img src="assets/dist/imgs/pexels-pixabay-260405.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Nome Produto</h5>
              <p class="card-text"> Descrição breve sobre o produto ou serviço disponibilizado.
              </p>
              <p><a class="btn btn-outline-success" href="#">Conversar com o Vendedor</a></p>
            </div>
          </div>
        </div><!-- /.col-lg-3 text-align-center  style="margin-bottom: 20px; text-align: center;"-->
        <div class="col-lg-6 text-align-center" style="margin-bottom: 20px; text-align: center; display: flex; justify-content: center;">
          <div class="card" style="width: 30rem;">
            <img src="assets/dist/imgs/pexels-pixabay-260405.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Nome Produto</h5>
              <p class="card-text"> Descrição breve sobre o produto ou serviço disponibilizado.
              </p>
              <p><a class="btn btn-outline-success" href="#">Conversar com o Vendedor</a></p>
            </div>
          </div>
        </div><!-- /.col-lg-3 text-align-center  style="margin-bottom: 20px; text-align: center;"-->
        <div class="col-lg-6 text-align-center" style="margin-bottom: 20px; text-align: center; display: flex; justify-content: center;">
          <div class="card" style="width: 30rem;">
            <img src="assets/dist/imgs/pexels-pixabay-260405.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Nome Produto</h5>
              <p class="card-text"> Descrição breve sobre o produto ou serviço disponibilizado.
              </p>
              <p><a class="btn btn-outline-success" href="#">Conversar com o Vendedor</a></p>
            </div>
          </div>
        </div><!-- /.col-lg-3 text-align-center  style="margin-bottom: 20px; text-align: center;"-->
      </div><!-- /.row -->
  </main>

  <section>
    <div class="row d-flex container-fluid justify-content-center align-items-center text-center" style="background-color: #5a23c8;">
      <div class="col-12 justify-content-center align-items-center text-center" style="margin: 60px;">
        <h1>Depoimentos</h1>
        <h4>Confira abaixo nossos clientes satisfeitos.</h4>
      </div>
      <div class="col-sm-3 col-12 custom-responsive" style="margin: 10px;">
        <p>Sou cliente há anos dessa loja e quero muito agradecer os produtos e serviços ofertados e tudo mais. to sem palavras. Tudo muito bom de otima qualidade eu adorei o atendimento e tudo mais...</p>
        <h4>Pethrus Oliveira</h4>
      </div>
      <div class="col-sm-3 col-12 custom-responsive" style="margin: 10px;">
        <p>Sou cliente há anos dessa loja e quero muito agradecer os produtos e serviços ofertados e tudo mais. to sem palavras. Tudo muito bom de otima qualidade eu adorei o atendimento e tudo mais...</p>
        <h4>Pethrus Oliveira</h4>
      </div>
      <div class="col-sm-3 col-12 custom-responsive" style="margin: 10px;">
        <p>Sou cliente há anos dessa loja e quero muito agradecer os produtos e serviços ofertados e tudo mais. to sem palavras. Tudo muito bom de otima qualidade eu adorei o atendimento e tudo mais...</p>
        <h4>Pethrus Oliveira</h4>
      </div>
    </div>
  </section>

  <div class="row" style="margin-top: 60px;">
    <div class="col-lg-6 text-align-center" style="margin-bottom: 20px; text-align: center; display: flex; justify-content: center;">
      <div class="card" style="width: 30rem;">
        <img src="assets/dist/imgs/pexels-pixabay-260405.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Nome Produto</h5>
          <p class="card-text"> Descrição breve sobre o produto ou serviço disponibilizado.
          </p>
          <p><a class="btn btn-outline-success" href="#">Conversar com o Vendedor</a></p>
        </div>
      </div>
    </div><!-- /.col-lg-3 text-align-center  style="margin-bottom: 20px; text-align: center;"-->
    <div class="col-lg-6 text-align-center" style="margin-bottom: 20px; text-align: center; display: flex; justify-content: center;">
      <div class="card" style="width: 30rem;">
        <img src="assets/dist/imgs/pexels-pixabay-260405.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Nome Produto</h5>
          <p class="card-text"> Descrição breve sobre o produto ou serviço disponibilizado.
          </p>
          <p><a class="btn btn-outline-success" href="#">Conversar com o Vendedor</a></p>
        </div>
      </div>
    </div><!-- /.col-lg-3 text-align-center  style="margin-bottom: 20px; text-align: center;"-->
  </div>

  <div class="container-fluid">
    <!--
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
  -->
  </div>


  <!-- START THE FEATURETTES -->
  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Subir</a></p>
    <div style="text-align: right;">
      <p>Mais descrições sobre a loja ou lista de redes sociais ... </p>
    </div>
  </footer>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
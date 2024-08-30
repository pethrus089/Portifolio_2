@extends('portifolio/basico')

@section('titulo', 'Pethrus Oliveira')

@section('index')

  <main class="px-3" style="text-align:left;">
    <p class="lead" style="margin: 0px;">Eu sou, </p>
    <h1 class="larger" style="display: inline;" id="element">Pethrus Oliveira.</h1>
    <p class="lead">Sou engenheiro de computação com 3 anos de experiência como analista de sistemas. Atualmente, desenvolvo aplicações utilizando PHP e Laravel e também trabalho com Node.js para web scraping.</p>
    <a href="img/pethrus_Oliveira-dev.pdf" target="blanck">
    <button type="button" class="btn btn-outline-secondary lead btn-lg baixar-curriculo">Baixar Currículo</button>
    </a>
  </main>

  <div id="typed-strings" style="display: none;">
    <p>Analista de Sistemas.</p>
    <p>Engenheiro da Computação.</p>
    <p>Desenvolvedor PHP-Laravel.</p>
    <p>Pethrus Oliveira.</p>
</div>

@endsection
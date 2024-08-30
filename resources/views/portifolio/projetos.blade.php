@extends('portifolio/basico')

@section('titulo', 'Projetos')

@section('projetos')


<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <h4>Nome Projeto 1</h4>
      <img src="{{ asset('img/envia.png') }}" alt="Imagem do projeto 1" style="width: 60%;">
      <p style="padding: 20px; padding-top: 0;">
        texto explicando o projeto 1. texto explicando o projeto 1. texto explicando o projeto 1.
      </p>
    </div>
    <div class="carousel-item">
      <h4>Nome Projeto 2</h4>
      <img src="{{ asset('img/envia.png') }}" alt="Imagem do projeto 2" style="width: 60%;">
      <p style="padding: 20px; padding-top: 0;">
        texto explicando o projeto 2. texto explicando o projeto 2. texto explicando o projeto 2.
      </p>
    </div>
    <div class="carousel-item">
      <h4>Nome Projeto 3</h4>
      <img src="{{ asset('img/envia.png') }}" alt="Imagem do projeto 3" style="width: 60%;">
      <p style="padding: 20px; padding-top: 0;">
        texto explicando o projeto 3. texto explicando o projeto 3. texto explicando o projeto 3.
      </p>
    </div>
    <div class="carousel-item">
      <h4>Nome Projeto 4</h4>
      <img src="{{ asset('img/envia.png') }}" alt="Imagem do projeto 4" style="width: 60%;">
      <p style="padding: 20px; padding-top: 0;">
        texto explicando o projeto 4. texto explicando o projeto 4. texto explicando o projeto 4.
      </p>
    </div>
    <div class="carousel-item">
      <h4>Nome Projeto 5</h4>
      <img src="{{ asset('img/envia.png') }}" alt="Imagem do projeto 5" style="width: 60%;">
      <p style="padding: 20px; padding-top: 0;">
        texto explicando o projeto 5. texto explicando o projeto 5. texto explicando o projeto 5.
      </p>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



@endsection
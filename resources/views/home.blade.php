@extends('padrao')
@section('content')


<body>
    

<div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>





  <!-------------------------------- C A R O U S E L ------------------->


  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="5000">
      <img src="{{'/img/cabo.png'}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
        <div class="titulo1">
        <b>NVIDIA notifica parceiras AICs de GPUs RTX 4090 com conectores queimados para avaliação</b>
        </div>

      
      </div>
    </div>


    <div class="carousel-item" data-bs-interval="5000">
      <img src="{{'/img/overwatch2.png'}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">

        <div class="overtexto">
        <b>Evento de Halloween de Overwatch 2 é marcado por erros de conexão</b>
        </div>

        
        
      </div>
    </div>


    <div class="carousel-item" data-bs-interval="5000">
      <img src="{{'/img/placa.png'}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">

        <div class="placa1">
        <b>NVIDIA oficializa as GPUs RTX 3060 Ti com memória GDDR6X e RTX 3060 8 GB</b>
        </div>

      </div>
    </div>





    <div class="carousel-item" data-bs-interval="5000">
      <img src="{{'/img/windows11.png'}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">

        <div class="placa1">
        <b>Windows 11 22H2 está causando problemas em CPUs AMD Ryzen 9 e GPUs NVIDIA</b>
        </div>

      </div>
    </div>




  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<!------------------------------------------------------------->







<!---------------------------- N O T I C I A S--------------------------->




<div class="branco">
<body class="cooler">
</body>
</div>





</body>

@endsection
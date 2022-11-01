<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>TechNews</title>
</head>


<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">


  <a class="navbar-brand" href="{{route('home')}}">
    
      <img src="{{'/img/logoDosite.png'}}" alt="" width="300" height="80" class="d-inline-block align-text-top">
    
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="menu1">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
     













<!-------------------------------- O P C O E S ------------------------->
 

<!----------------------------------------------------------------------->
        


        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Notícias
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('ver-noticia')}}">Ver Notícias</a></li>
          </ul>
        </li>



        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Notícias Admin
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('cadastrar-noticia')}}">Cadastrar Notícias</a></li>
            <li><a class="dropdown-item" href="#">Buscar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('editar-noticia')}}">Gerenciar Notícias</a></li>
          </ul>
        </li>



<!----------------------------------------------------------------------->

        <div class="pesquisa">
        <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Busque aqui" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
      </div>
        



      </ul>

    </div>
  </div>
  </div>
</nav>
</header>



<!-------------------------------- C A R O U S E L ------------------->



<div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>



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


<!---------------------------------------------------------------------------------------------------------------->



<!------------------------------------------------------------ W A L P A P P E R--------------------------------->
<body class="body1">



<!------------------------------------------------- C A I X A  B R A N C A ------------------------------------->

<div class="caixabranca">





@yield('content')











<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>


</body>
<div class="footer1">

<section class="hero text-white py-5 flex-grow-1">
        <div class="container py-4">
            <div class="row">

              <div class="footertexto">
                <div class="col-lg-6">
                    <h1 class="display-4">TechNews</h1>
                    <p class="fst-italic text-muted">Nossa equipe agradece pela visita!</p>
                </div>
              </div>


            </div>
        </div>
    </section>



    <footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h1 text-white">FB.</h5>
                    <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary" href="#">Bootstrapious.com</a></p>
                </div>
                <div class="col-lg-2 col-md-6">
                   
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Nossas Redes</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">TikTok</a></li>
                        <li><a href="#">Twitter</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-3">Localizaçãp</h5>
                    <p class="small text-muted">Rua Senador Vergueiro, 400. São Bernado do Campo.</p>
                    <form action="#">
                        <div class="input-group mb-3">
                    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
</div>

</div>

</html>
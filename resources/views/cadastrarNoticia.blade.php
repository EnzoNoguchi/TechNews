@extends('padrao')
@section('content')
<section>



  <div class="titulo">
    <h1><p class="text-center">Cadastre sua Dúvida Aqui</p></h1>
  </div>



  <div class="formulario">

  <div class="container1">
    <form class="row g-3" method="post" action="{{route('salvar-bancoNoticia')}}">
      @csrf



      <div class="col-md-6">
      <label for="inputTopico" class="form-label">Tópico</label>
      <select class="form-select" aria-label="Default select example" for="inputTopico" name="topico" value="{{old('topico')}}">

      <option selected>Selecione um Tópico</option>
      <option name="topico">Hardware</option>
      <option name="topico">Games</option>
      <option name="topico">Software</option>
      <option name="topico">Progamação</option>
      </select>

      </div>






      <div class="col-md-6">
        <label for="inputTitulo" class="form-label">Título</label>
        <input type="text" name="titulo" value="{{old('titulo')}}" class="form-control" id="inputTitulo" placeholder="Escreva um título"> 
        @error('titulo')
        <div class="text-sm-start text-dark">Preencher o campo título.</div>
        @enderror
      </div>




      <div class="col-md-14">
        <label for="inputTitulo" class="form-label">Dúvida</label>
        <textarea class="form-control" placeholder="Escreva sua dúvida" id="floatingTextarea2" style="height: 100px" name="duvida" value="{{old('duvida')}}"></textarea>
        @error('titulo')
        <div class="text-sm-start text-dark">Preencher o campo dúvida.</div>
        @enderror
      </div>








      <div class="pronto">
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar Noticia</button>
      </div>
      </div>


    </form>
  </div>

  </div>

</div>

</section>
@endsection

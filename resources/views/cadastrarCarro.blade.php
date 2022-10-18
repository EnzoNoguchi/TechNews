@extends('padrao')
@section('content')
<section>


<div class="titulo">
<h1><p class="text-center">Cadastre Aqui</p></h1>
</div>

<div class="formulario">

<div class="container1">
<form class="row g-3" method="post" action="{{route('salvar-bancoCarro')}}">
  @csrf


  <div class="col-md-6">
    <label for="inputModelo" class="form-label">Modelo</label>
    <input type="text" name="modelo" value="{{old('modelo')}}" class="form-control" id="inputModelo" placeholder="Fusca">
    @error('modelo')
    <div class="text-sm-start text-dark">Preencher o campo modelo.</div>
    @enderror
  </div>


  <div class="col-md-6">
    <label for="inputMarca" class="form-label">Marca</label>
    <input type="text" name="marca" value="{{old('marca')}}" class="form-control" id="inputMarca" placeholder="BMW"> 
    @error('marca')
    <div class="text-sm-start text-dark">Preencher o campo marca.</div>
    @enderror
  </div>


  <div class="col-12">
    <label for="inputAno" class="form-label">Ano</label>
    <input type="text" name="ano" value="{{old('ano')}}" class="form-control" id="inputAno" placeholder="2000">
    @error('ano')
    <div class="text-sm-start text-dark">Preencher o campo ano.</div>
    @enderror
  </div>

  
  <div class="col-12">
    <label for="inputCor" class="form-label">Cor</label>
    <input type="text" name="cor" value="{{old('cor')}}" class="form-control" id="inputCor" placeholder="52352-53523">
    @error('cor')
    <div class="text-sm-start text-dark">Preencher o campo cor.</div>
    @enderror
  </div>


  <div class="col-md-6">
    <label for="inputValor" class="form-label">Valor</label>
    <input type="text" name="valor" value="{{old('valor')}}" class="form-control" id="inputValor" placeholder="R$434,000">
    @error('valor')
    <div class="text-sm-start text-dark">Preencher o campo valor.</div>
    @enderror
  </div>

 




  <div class="pronto">
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
  </div>


</form>
</div>

</div>

</section>
@endsection

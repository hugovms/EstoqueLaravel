@extends('layouts.app')
@section('content')

@if(count($errors) > 0)
<div class="alert alert-danger col-12">
	<ul >
		@foreach($errors->all() as $error)
		<li >{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif
<form action="/produtos/adiciona" method="post" class="col-12" action="formulario_submit"accept-charset="utf-8">
	<input value="{{csrf_token()}}" name="_token" type="hidden">
	<div class="form-group">
		<label>Nome</label>
		<input class="form-control" type="" value="{{old('nome')}}" name="nome">
	</div>
	<div class="form-group">
		<label>Valor</label>
		<input class="form-control" type="" value="{{old('valor')}}" name="valor">
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input class="form-control" type="" value="{{old('quantidade')}}" name="quantidade">
	</div>
	<div class="form-group">
		<label>Tamanho</label>
		<input class="form-control" type="" value="{{old('tamanho')}}" name="tamanho">
	</div>
	<div class="form-group">
		<label>Categoria</label>
		<select  class="form-control" name="categoria_id">
			@foreach($categorias as $c)
			<option value="{{$c->id}}">{{$c->nome}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Descrição</label>
		<textarea  class="form-control"name="descricao" value="{{old('descricao')}}"></textarea>
	</div>
	<button class="btn btn-primary col-12" type="submit">Enviar</button>
</form>
@stop
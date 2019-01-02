@extends('layouts.app')

@section('content')
@if(old('nome'))
	<div class="col-12 alert alert-success">
		Produto {{old('nome')}} adicionado com sucesso
	</div>
@endif
<h1>Listagem de produtos</h1>
<table class="table table-hover">
	@if(empty($produtos))
		<div class="alert alert-danger col-12">
			Não existe nenhum produto cadastrado no sistema.
		</div>
	@else
		<thead>
			<td>Nome:</td>
			<td>Valor:</td>
			<td>Descrição:</td>
			<td>Quantidade:</td>
			<td>Tamanho:</td>
			<td>Categoria:</td>
			<td></td>
		</thead>
	@foreach ($produtos as $p)
			<tr class="{{ $p->quantidade <= 1 ? 'alert alert-danger' : '' }}">
				<td> {{$p->nome}} </td>
				<td> {{$p->valor}} </td>
				<td> {{$p->descricao}} </td>
				<td> {{$p->quantidade}} </td>
				<td> {{$p->tamanho}} </td>
				<td> {{$p->categoria->nome}} </td>
				<td>
					<a href="/produtos/mostra/<?= $p->id?>" >
						<img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-512.png" alt="" height="20" width="20">
					</a>
				</td>
				<td>
					<a href="/produtos/remove/<?= $p->id?>" >
						<img src="https://cdn3.iconfinder.com/data/icons/wpzoom-developer-icon-set/500/90-512.png" alt="" height="20" width="20">
					</a>
				</td>
			</tr>
		@endforeach
		@endif
</table>
@stop

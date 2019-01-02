@extends('layouts.app')
@section('content')
		<div class="col-12">
			<h1>Detalhes do produto  <?= $p->nome ?> </h1>
		</div>
		<ul>
			<li>Descrição: <?= $p->descricao ?></li>
			<li>Valor:  <?= $p->valor ?> </li>
			<li>Quantidade em estoque:  <?= $p->quantidade ?> </li>
		</ul>
@stop

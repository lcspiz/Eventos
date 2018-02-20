@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 30px;
	}
</style>
<form action="{{route('serv1.update',['id'=> $serv1->codigo])}}" method="post">
	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading">Cadastro de Serviços Nv.1</div>
	<div class="form-inline">
		{{ csrf_field() }}
		<p></p>
		<label for="nome">Código:</label>
		<input type="text" class="form-control" maxlength="10" size="10" name="codigo" value="{{$serv1->codigo}}">
		<label for="nome">Descrição:</label>
		<input type="text" name="descricao" class="form-control" value="{{$serv1->descricao}}">
		<button type="submit" class="btn btn-btn-success">Cadastrar</button>
		<p></p>
	</div>
	</div>
</div>
</div>
</form>
</fieldset>
@stop
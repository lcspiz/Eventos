@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 30px;
	}
</style>
<form action="{{route('grupos.update',['id'=> $grupo->id])}}" method="post">
	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading">Editar Grupo: {{$grupo->descricao}}</div>
	<div class="form-inline">
		{{ csrf_field() }}
		<p></p>
		<label for="nome">Código:</label>
		<input type="text" class="form-control" maxlength="10" size="10" name="codigo" value="{{$grupo->id}}">
		<label for="nome">Descrição:</label>
		<input type="text" name="descricao" class="form-control" value="{{$grupo->descricao}}">
		<button type="submit" class="btn btn-btn-success">Cadastrar</button>
		<p></p>
	</div>
	</div>
</div>
</div>
</form>
</fieldset>
@stop
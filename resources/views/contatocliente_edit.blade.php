@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 5px;
	}


</style>
<form action="{{route('contato_cliente.update',['id_cliente'=> $contato->id_cliente, 'id_contato'=>$contato->id])}}" method="post">
	<div class="panel panel-default">
	<div class="panel-heading">Editar Contato de: {{$cliente->nome}}</div>
	<div class="form-group">
		{{ csrf_field() }}

	<div class="container">
		<div class="form-inline">
			<p></p>
			<label for="nome">Nome:</label>
			<input type="text" name="nome" class="form-control" value="{{$contato->nome}}">
			&nbsp;
			<label for="nome">Cargo:</label>
			<input type="text" maxlength="14" size="14" name="cargo" class="form-control" value="{{$contato->cargo}}">
			&nbsp;
			<label for="nome">Email:</label>
			<input type="text" maxlength="20" size="20" name="email" class="form-control" value="{{$contato->email}}">
			&nbsp;
			<label for="nome">Fone:</label>
			<input type="text" maxlength="20" size="20" name="fone" class="form-control" value="{{$contato->fone}}">
			&nbsp;
		</div>
	</div>
<p></p>			
	<div class="container">
		<div class="form-inline">
		<label for="nome">Observação:</label>
			<input type="text" maxlength="60" size="30" name="observacao" class="form-control" value="{{$contato->observacao}}">
			<button type="submit" class="btn btn-primary">Atualizar</button>
	</div>
	</div>
<p></p>

</div>

</form>
@stop
@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 30px;
	}
</style>
<form action="{{route('serv2.store')}}" method="post">
	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading">Cadastro de Serviços Nv.2</div>
	<div class="form-inline">
		{{ csrf_field() }}
		<p></p>
		<label for="nome">Código Nv1:</label>
		<select name="codserv1" class="form-control">
			@foreach($servicos1 as $serv)
				<option value="{{$serv->codigo}}">{{$serv->codigo}} - {{$serv->descricao}}</option>
			@endforeach
			
		</select>
		<label for="nome">Código:</label>
		<input type="text" class="form-control" maxlength="10" size="10" name="codigo">
		<label for="nome">Descrição:</label>
		<input type="text" name="descricao" class="form-control">
		<label for="nome">Valor:</label>
		<input type="text" name="valor" class="form-control">
		<button type="submit" class="btn btn-btn-success">Cadastrar</button>
		<p></p>
	</div>
	</div>
</div>
</div>
</form>
</fieldset>
@stop
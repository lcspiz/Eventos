@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 30px;
	}
</style>
<form action="{{route('subgrupos.store')}}" method="post">
	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading">Cadastro de Subgrupos</div>
	<div class="form-inline">
		{{ csrf_field() }}
		<p></p>
		<label for="nome">Grupo:</label>
		<select name="codgrupo" class="form-control">
			@foreach($grupos as $grupo)
				<option value="{{$grupo->codigo}}">{{$grupo->codigo}} - {{$grupo->descricao}}</option>
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
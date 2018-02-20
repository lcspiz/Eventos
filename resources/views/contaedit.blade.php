@extends('welcome')

@section('content')
<style type="text/css">
	.form-group{
		padding-left: 30px;
	}
</style>
<form action="{{route('contacorrente.update',['id'=> $conta->codbanco])}}" method="post">
	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading">Editar Conta</div>
	<div class="form-group">
		{{ csrf_field() }}
		<p></p>
		<label for="nome">Banco:</label>
		<input type="text" maxlength="3" size="3" name="banco" value="{{$conta->banco}}">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" value="{{$conta->nome}}">
		<label for="nome">Agencia:</label>
		<input type="text" maxlength="4" size="4" name="agencia" value="{{$conta->agencia}}">
		<label for="nome">Dgt Agencia:</label>
		<input type="text" maxlength="1" size="1" name="dgtagencia" value="{{$conta->dgt_agencia}}">
		<label for="nome">Conta:</label>
		<input type="text" maxlength="10" size="10" name="conta" value="{{$conta->conta}}">
		<label for="nome">Dgt Conta:</label>
		<input type="text" maxlength="2" size="2" name="dgtConta" value="{{$conta->dgt_agencia}}">
		<label for="nome">Ativa:</label>
		<select name="ativa">
		 <option value="S">S</option>
		 <option value="N">N</option>
		</select>
		<label for="nome">Titular:</label>
		<input type="text" name="titular" value="{{$conta->titular}}">
		<label for="nome">Apelido:</label>
		<input type="text" name="apelido" value="{{$conta->apelido}}">
		<label for="nome">Conta Padrão:</label>
		<select name="contapadrao">
		 <option value="S">S</option>
		 <option value="N">N</option>
		</select>
		<button type="submit" class="btn btn-btn-success">Editar</button>
	</div>
</div>
</div>
</form>
@stop
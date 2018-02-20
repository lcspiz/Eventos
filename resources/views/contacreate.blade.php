@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 30px;
	}
</style>
<form action="{{route('contacorrente.store')}}" method="post">
	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading">Cadastro de Contas</div>
	<div class="form-inline">
		{{ csrf_field() }}
		<p></p>
		<label for="nome">Banco:</label>
		<input type="text" maxlength="3" size="3" name="banco">
		<label for="nome">Nome:</label>
		<input type="text" name="nome">
		<label for="nome">Agencia:</label>
		<input type="text" maxlength="4" size="4" name="agencia">
		<label for="nome">Dgt Agencia:</label>
		<input type="text" maxlength="1" size="1" name="dgtagencia">
		<label for="nome">Conta:</label>
		<input type="text" maxlength="10" size="10" name="conta">
		<label for="nome">Dgt Conta:</label>
		<input type="text" maxlength="2" size="2" name="dgtConta">
		<label for="nome">Ativa:</label>
		<select name="ativa">
		 <option value="S">S</option>
		 <option value="N">N</option>
		</select>
		</div>
		<div class="form-inline">
		<label for="nome">Titular:</label>
		<input type="text" name="titular">
		<label for="nome">Apelido:</label>
		<input type="text" name="apelido">
		<label for="nome">Conta Padrão:</label>
		<select name="contapadrao">
		 <option value="S">S</option>
		 <option value="N">N</option>
		</select>
		<button type="submit" class="btn btn-btn-success">Cadastrar</button>
	</div>
	</div>
</div>
</div>
</form>
</fieldset>
@stop
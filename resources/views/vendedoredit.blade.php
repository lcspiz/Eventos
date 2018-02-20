@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 5px;
	}
</style>
<form action="{{route('vendedor.update',['id'=> $vendedor->id])}}" method="post">
	<div class="panel panel-default">
	<div class="panel-heading">Editar Vendedor: {{$vendedor->nome}}</div>
	<div class="form-group">
		{{ csrf_field() }}


	<div class="container">
		<div class="form-inline">
			<p></p>
			<label for="nome">Nome:</label>
			<input type="text" class="form-control" name="nome" value="{{$vendedor->nome}}">
			&nbsp;
			<label for="nome">CNPJ:</label>
			<input type="text" maxlength="14" class="form-control" size="14" name="cnpj" id="cnpj" value="{{$vendedor->cnpj}}">
			&nbsp;
			<label for="nome">RG:</label>
			<input type="text" maxlength="20" class="form-control" size="20" name="rg" id="rg" value="{{$vendedor->rg}}">
			&nbsp;
			<label for="nome">Email:</label>
			<input type="text" maxlength="60" class="form-control" size="30" name="email" value="{{$vendedor->email}}">
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Endereço:</label>
			<input type="text" maxlength="40" class="form-control" size="20" name="endereco" value="{{$vendedor->endereco}}">
			&nbsp;
			<label for="nome">Numero:</label>
			<input type="text" maxlength="10" class="form-control" size="10" name="numero" value="{{$vendedor->numero}}">
			&nbsp;
			<label for="nome">CEP:</label>
			<input type="text" maxlength="9" class="form-control" size="9" name="cep" id="cep" value="{{$vendedor->cep}}">
			&nbsp;
			<label for="nome">Complemento:</label>
			<input type="text" maxlength="20" class="form-control" size="10" name="complemento" value="{{$vendedor->complemento}}">
			&nbsp;
			<label for="nome">Bairro:</label>
			<input type="text" maxlength="30" class="form-control" size="20" name="bairro" value="{{$vendedor->bairro}}">
		</div>
	</div>
<p></p>
	<div class="container">
		<div class="form-inline">
			<label for="nome">Cidade:</label>
			<input type="text" maxlength="30" class="form-control" size="20" name="cidade" value="{{$vendedor->cidade}}">
			&nbsp;
			<label for="nome">UF:</label>
			<input type="text" maxlength="2" class="form-control" size="2" name="uf" value="{{$vendedor->uf}}">
			&nbsp;
			<label for="nome">Fone1:</label>
			<input type="text" maxlength="15" class="form-control" size="15" name="fone1" id="telefone" value="{{$vendedor->fone1}}">
			&nbsp;
			<label for="nome">Fone2:</label>
			<input type="text" maxlength="15" class="form-control" size="15" name="fone2" id="telefone2" value="{{$vendedor->fone2}}">
			&nbsp;
			<label for="nome">Celular:</label>
			<input type="text" maxlength="15" class="form-control" size="15" name="celular" id="celular" value="{{$vendedor->celular}}">
			
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Fantasia:</label>
			<input type="text" maxlength="30" class="form-control" size="20" name="fantasia" value="{{$vendedor->fantasia}}">
			&nbsp;
			<label for="nome">Site:</label>
			<input type="text" maxlength="40" class="form-control" size="20" name="site" value="{{$vendedor->site}}">
			&nbsp;
			<label for="nome">Observação:</label>
			<input type="text" class="form-control" name="observacao" value="{{$vendedor->observacao}}">
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Banco:</label>
			<input type="text" maxlength="20" class="form-control" size="20" name="banco" value="{{$vendedor->banco}}">
			&nbsp;
			<label for="nome">Agencia:</label>
			<input type="text" maxlength="4" class="form-control" size="4" name="agencia" value="{{$vendedor->agencia}}">
			&nbsp;
			<label for="nome">Conta:</label>
			<input type="text" maxlength="10" class="form-control" size="10" name="conta" value="{{$vendedor->conta}}">
			&nbsp;
			<label for="nome">Tipo:</label>
			<input type="text" maxlength="2" class="form-control" size="2" name="tipo" value="{{$vendedor->tipo}}">
			&nbsp;
			<label for="nome">Titular:</label>
			<input type="text" name="titular" class="form-control" value="{{$vendedor->titular}}">
			&nbsp;
			<label for="nome">CPF Conta:</label>
			<input type="text" name="cpfconta" size="14" class="form-control" value="{{$vendedor->cpfconta}}">
			</div>
		<p></p>
		<button type="submit" class="btn btn-primary btn-sm col-md-1 col-md-offset-5">Cadastrar</button>
		</div>
	</div>
</div>
</form>
@stop
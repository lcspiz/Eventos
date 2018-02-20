@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 5px;
	}


</style>
<form action="{{route('vendedor.store')}}" method="post">
	<div class="panel panel-default">
	<div class="panel-heading">Cadastro de Vendedores</div>
	<div class="form-group">
		{{ csrf_field() }}

	<div class="container">
		<div class="form-inline">
			<p></p>
			<label for="nome">Nome:</label>
			<input type="text" name="nome" class="form-control">
			&nbsp;
			<label for="nome">CNPJ:</label>
			<input type="text" maxlength="14" size="18" name="cnpj" id="cnpj" class="form-control">
			&nbsp;
			<label for="nome">RG:</label>
			<input type="text" maxlength="20" size="20" name="rg" id="rg" class="form-control">
			&nbsp;
			<label for="nome">Email:</label>
			<input type="text" maxlength="60" size="30" name="email" class="form-control">
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Endereço:</label>
			<input type="text" maxlength="40" size="20" name="endereco" class="form-control">
			&nbsp;
			<label for="nome">Numero:</label>
			<input type="text" maxlength="10" size="10" name="numero" class="form-control">
			&nbsp;
			<label for="nome">CEP:</label>
			<input type="text" maxlength="9" size="9" name="cep" id="cep" class="form-control">
			&nbsp;
			<label for="nome">Complemento:</label>
			<input type="text" maxlength="20" size="10" name="complemento" class="form-control">
			&nbsp;
			<label for="nome">Bairro:</label>
			<input type="text" maxlength="30" size="20" name="bairro" class="form-control">
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Cidade:</label>
			<input type="text" maxlength="30" size="20" name="cidade" class="form-control">
			&nbsp;
			<label for="nome">UF:</label>
			<input type="text" maxlength="2" size="2" name="uf" class="form-control">
			&nbsp;
			<label for="nome">Fone1:</label>
			<input type="text" maxlength="15" size="15" name="fone1" class="form-control">
			&nbsp;
			<label for="nome">Fone2:</label>
			<input type="text" maxlength="15" size="15" name="fone2" class="form-control">
			&nbsp;
			<label for="nome">Celular:</label>
			<input type="text" maxlength="15" size="15" name="celular" class="form-control">
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Fantasia:</label>
			<input type="text" maxlength="30" size="20" name="fantasia" class="form-control">
			&nbsp;
			<label for="nome">Site:</label>
			<input type="text" maxlength="40" size="20" name="site" class="form-control">
			&nbsp;
			<label for="nome">Observação:</label>
			<input type="text" maxlength="40" name="observacao" class="form-control">
			&nbsp;
			<label for="nome">Comissão:</label>
			<input type="numeric" maxlength="5" name="comissao" id="comissao" class="form-control">
		</div>
	</div>	
<p></p>
	<div class="container">
		<div class="form-inline">
			<label for="nome">Banco:</label>
			<input type="text" maxlength="20" size="18" name="banco" class="form-control">
			&nbsp;
			<label for="nome">Agencia:</label>
			<input type="text" maxlength="4" size="4" name="agencia" class="form-control">
			&nbsp;
			<label for="nome">Conta:</label>
			<input type="text" maxlength="10" size="10" name="conta" class="form-control">
			&nbsp;
			<label for="nome">Tipo:</label>
			<input type="text" maxlength="2" size="2" name="tipo" class="form-control">
			&nbsp;
			<label for="nome">Titular:</label>
			<input type="text" maxlength="20" size="20" name="titular" class="form-control">
			&nbsp;
			<label for="nome">CPF Conta:</label>
			<input type="text" size="15" name="cpfconta" class="form-control">
		</div>
		<p></p>
		<button type="submit" class="btn btn-primary btn-sm col-md-1 col-md-offset-5">Cadastrar</button>
	</div>
</div>

</form>
@stop
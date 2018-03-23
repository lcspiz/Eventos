@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 5px;
	}

</style>
<form action="{{route('casting.store')}}" method="post">
	<div class="panel panel-default">
	<div class="panel-heading">Cadastro de Casting</div>
	<div class="form-group">
		{{ csrf_field() }}

	<div class="container">
		<div class="form-inline">
			<p></p>
			<label for="nome">Nome:</label>
			<input type="text" name="nome" class="form-control">
			&nbsp;
			<label for="nome">S.Nome:</label>
			<input type="text" name="snome" class="form-control">
			&nbsp;
			<label for="nome">Nascimento:</label>
			<input type="text" maxlength="10" size="10" name="nascimento" id="nascimento" class="form-control">
			&nbsp;
			<label for="nome">Ativo:</label>
			<input type="hidden" name="ativo" value="0">
			<input name="ativo" type="checkbox" value="1" checked>
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Fone Res:</label>
			<input type="text" maxlength="15" size="15" name="foneres" id="telefone" class="form-control">
			&nbsp;
			<label for="nome">Fone1:</label>
			<input type="text" maxlength="15" size="15" name="fone1" id="telefone" class="form-control">
			&nbsp;
			<label for="nome">Fone2:</label>
			<input type="text" maxlength="15" size="15" name="fone2" id="telefone2" class="form-control">
			<label for="nome">Sexo:</label>
			<select name="sexo" class="form-control">
				<option value="M">Masculino</option>
				<option value="F">Feminino</option>
			</select>
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
			<label for="nome">CEP:</label>
			<input type="text" maxlength="9" size="9" name="cep" id="cep" class="form-control">
			&nbsp;
			<label for="nome">Cidade:</label>
			<input type="text" maxlength="30" size="20" name="cidade" class="form-control">
			&nbsp;
			<label for="nome">UF:</label>
			<input type="text" maxlength="2" size="2" name="uf" class="form-control">
			&nbsp;
			<label for="nome">Classificação:</label>
			<select name="classificacao" class="form-control">
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
				<option value="E">E</option>
			</select>
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">RG:</label>
			<input type="text" maxlength="12" size="12" name="rg" id="rg" class="form-control">
			&nbsp;
			<label for="nome">CPF:</label>
			<input type="text" maxlength="18" size="20" name="cpf" id="cpf" class="form-control">
			&nbsp;
			<label for="nome">Estado Civil:</label>
			<select name="estado_civil" class="form-control">
				<option value="solteiro">Solteiro</option>
				<option value="casado">Casado</option>
			</select>
		</div>
	</div>
<p></p>


	<div class="container">
		<div class="form-inline">
			<label for="nome">Email:</label>
			<input type="text" maxlength="60" size="30" name="email" class="form-control">
			&nbsp;
			<label for="nome">Email Secundario:</label>
			<input type="text" maxlength="60" size="30" name="email2" class="form-control">
			&nbsp;
			<label for="nome">Social:</label>
			<input type="text" maxlength="40" size="20" name="social" class="form-control">
			&nbsp;
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
			<input type="text" name="titular" class="form-control">
			&nbsp;
			<label for="nome">CPF Conta:</label>
			<input type="text" size="15" name="cpfconta" class="form-control">
			</div>
			<p></p>
	</div>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Contato:</label>
			<input type="text" maxlength="60" size="60" name="contato" class="form-control">
			&nbsp;
			<label for="nome">Apelido:</label>
			<input type="text" maxlength="60" size="30" name="apelido" class="form-control">
		</div>
			<p></p>
					<button type="submit" class="btn btn-primary btn-sm col-md-1 col-md-offset-5">Cadastrar</button>
	</div>


	</div>
</div>
</form>

@stop
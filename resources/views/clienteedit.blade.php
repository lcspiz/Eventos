@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 30px;
	}
</style>

<form action="{{route('cliente.update',['id'=> $cliente->id])}}" method="post">
	<div class="panel panel-default">
	<div class="panel-heading">Editar Cliente: {{$cliente->nome}}</div>
	<div class="form-group">
		{{ csrf_field() }}


	<div class="container">
		<div class="form-inline">
			<p></p>
			<label for="nome">Nome:</label>
			<input type="text" name="nome" value="{{$cliente->nome}}" class="form-control">
			&nbsp;
			<label for="nome">CNPJ:</label>
			<input type="text" maxlength="14" size="14" name="cnpj" id="cnpj" value="{{$cliente->cnpj}}" class="form-control">
			&nbsp;
			<label for="nome">RG:</label>
			<input type="text" maxlength="20" size="20" name="rg" id="rg" value="{{$cliente->rg}}" class="form-control">
			&nbsp;
			<label for="nome">Email:</label>
			<input type="text" maxlength="60" size="30" name="email" value="{{$cliente->email}}" class="form-control">
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Endereço:</label> 
			<input type="text" maxlength="40" size="20" name="endereco" value="{{$cliente->endereco}}" class="form-control">
			&nbsp;
			<label for="nome">Numero:</label>
			<input type="text" maxlength="10" size="10" name="numero" value="{{$cliente->numero}}" class="form-control">
			&nbsp;
			<label for="nome">CEP:</label>
			<input type="text" maxlength="9" size="9" name="cep" id="cep" value="{{$cliente->cep}}" class="form-control">
			&nbsp;
			<label for="nome">Complemento:</label>
			<input type="text" maxlength="20" size="10" name="complemento" value="{{$cliente->complemento}}" class="form-control">
			&nbsp;
			<label for="nome">Bairro:</label>
			<input type="text" maxlength="30" size="20" name="bairro" value="{{$cliente->bairro}}" class="form-control">
		</div>
	</div>
<p></p>
	<div class="container">
		<div class="form-inline">
			<label for="nome">Cidade:</label>
			<input type="text" maxlength="30" size="20" name="cidade"  value="{{$cliente->cidade}}" class="form-control">
			&nbsp;
			<label for="nome">UF:</label>
			<input type="text" maxlength="2" size="2" name="uf" value="{{$cliente->uf}}" class="form-control">
			&nbsp;
			<label for="nome">Fone1:</label>
			<input type="text" maxlength="15" size="15" name="fone1" id="telefone" value="{{$cliente->fone1}}" class="form-control">
			&nbsp;
			<label for="nome">Fone2:</label>
			<input type="text" maxlength="15" size="15" name="fone2" id="telefone2" value="{{$cliente->fone2}}" class="form-control">
			&nbsp;
			<label for="nome">Celular:</label>
			<input type="text" maxlength="15" size="15" name="celular" id="celular" value="{{$cliente->celular}}" class="form-control">
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Fantasia:</label>
			<input type="text" maxlength="30" size="20" name="fantasia" value="{{$cliente->fantasia}}" class="form-control">
			&nbsp;
			<label for="nome">Site:</label>
			<input type="text" maxlength="40" size="20" name="site" value="{{$cliente->site}}" class="form-control">
			&nbsp;
			<label for="nome">Observação:</label>
			<input type="text" name="observacao" value="{{$cliente->observacao}}" class="form-control">
		</div>
	</div>
<p></p>
	<div class="container">
		<div class="form-inline">			
			<label for="nome">Banco:</label>
			<input type="text" maxlength="20" size="5" name="banco" value="{{$cliente->banco}}" class="form-control">
			&nbsp;
			<label for="nome">Agencia:</label>
			<input type="text" maxlength="4" size="4" name="agencia" value="{{$cliente->agencia}}" class="form-control">
			&nbsp;
			<label for="nome">Conta:</label>
			<input type="text" maxlength="10" size="10" name="conta" value="{{$cliente->conta}}" class="form-control">
			&nbsp;
			<label for="nome">Tipo:</label>
			<input type="text" maxlength="2" size="2" name="tipo" value="{{$cliente->tipo}}" class="form-control">
			&nbsp;
			<label for="nome">Titular:</label>
			<input type="text" name="titular" size="20" value="{{$cliente->titular}}" class="form-control">
			&nbsp;
			<label for="nome">CPF Conta:</label>
			<input type="text" size="14" name="cpfconta" value="{{$cliente->cpfconta}}" class="form-control">
		</div>
		<p></p>
		<button type="submit" class="btn btn-primary btn-sm col-md-1 col-md-offset-5">Editar</button>
	</div>
</div>
</div>
</form>

<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Contatos</h3>
				
	 <a href="{{route('contato_cliente.create',['id'=> $cliente->id])}}" type="button" class="btn btn-default pull-right">Novo Contato</a>
        <div class="clearfix"></div>
    </div>
	<div class="panel-body">
			<table class="table table-hover">
				
					<thead>
						<th>
							Nome
						</th>

						<th>
							Cargo
						</th>

						<th>
							Email
						</th>
						<th>
							Fone
						</th>
						<th>
							Observação
						</th>

						<th>
							Editar
						</th>

						<th>
							Excluir
						</th>


					</thead>

					<tbody>
						@foreach($contatos as $contato)
							<tr>
								<td>
									{{$contato->nome}}
								</td>
								<td>
									{{$contato->cargo}}
								</td>
								<td>
									{{$contato->email}}
								</td>
								<td>
									{{$contato->fone}}
								</td>

								<td>
									{{$contato->observacao}}
								</td>


								<td>
									<a href="{{route('contato_cliente.edit',['id_cliente'=>$cliente->id, 'id_contato'=> $contato->id])}}" class="btn btn-xs btn-success">Editar</a>
								</td>

								<td>
									<a href="{{route('contato_cliente.delete',['id'=> $contato->id])}}" class="btn btn-xs btn-danger" onclick="return confirm('Deseja excluir cliente: {{$cliente->nome}}')">Excluir</a>
								</td>

							</tr>

						@endforeach

					</tbody>
				</table>
			
		</div>
		
	</div>
</div>

@stop
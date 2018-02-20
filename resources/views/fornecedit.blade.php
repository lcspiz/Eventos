@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 30px;
	}
</style>
<form action="{{route('fornecedor.update',['id'=> $fornecedor->id])}}" method="post">
	<div class="panel panel-default">
	<div class="panel-heading">Editar Fornecedor: {{$fornecedor->nome}}</div>
	<div class="form-group">
		{{ csrf_field() }}


	<div class="container">
		<div class="form-inline">
			<p></p>
			<label for="nome">Nome:</label>
			<input type="text" name="nome" value="{{$fornecedor->nome}}" class="form-control">
			&nbsp;
			<label for="nome">CNPJ:</label>
			<input type="text" maxlength="14" size="14" name="cnpj" value="{{$fornecedor->cnpj}}" class="form-control">
			&nbsp;
			<label for="nome">RG:</label>
			<input type="text" maxlength="20" size="20" name="rg" value="{{$fornecedor->rg}}" class="form-control">
			&nbsp;
			<label for="nome">Email:</label>
			<input type="text" maxlength="60" size="30" name="email" value="{{$fornecedor->email}}" class="form-control">
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Endereço:</label> 
			<input type="text" maxlength="40" size="20" name="endereco" value="{{$fornecedor->endereco}}" class="form-control">
			&nbsp;
			<label for="nome">Numero:</label>
			<input type="text" maxlength="10" size="10" name="numero" value="{{$fornecedor->numero}}" class="form-control">
			&nbsp;
			<label for="nome">CEP:</label>
			<input type="text" maxlength="9" size="9" name="cep" value="{{$fornecedor->cep}}" class="form-control">
			&nbsp;
			<label for="nome">Complemento:</label>
			<input type="text" maxlength="20" size="10" name="complemento" value="{{$fornecedor->complemento}}" class="form-control">
			&nbsp;
			<label for="nome">Bairro:</label>
			<input type="text" maxlength="30" size="20" name="bairro" value="{{$fornecedor->bairro}}" class="form-control">
		</div>
	</div>
<p></p>
	<div class="container">
		<div class="form-inline">
			<label for="nome">Cidade:</label>
			<input type="text" maxlength="30" size="20" name="cidade" value="{{$fornecedor->cidade}}" class="form-control">
			&nbsp;
			<label for="nome">UF:</label>
			<input type="text" maxlength="2" size="2" name="uf" value="{{$fornecedor->uf}}" class="form-control">
			&nbsp;
			<label for="nome">Fone1:</label>
			<input type="text" maxlength="15" size="15" name="fone1" value="{{$fornecedor->fone1}}" class="form-control">
			&nbsp;
			<label for="nome">Fone2:</label>
			<input type="text" maxlength="15" size="15" name="fone2" value="{{$fornecedor->fone2}}" class="form-control">
			&nbsp;
			<label for="nome">Celular:</label>
			<input type="text" maxlength="15" size="15" name="celular" value="{{$fornecedor->celular}}" class="form-control">
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Fantasia:</label>
			<input type="text" maxlength="30" size="20" name="fantasia" value="{{$fornecedor->fantasia}}" class="form-control">
			&nbsp;
			<label for="nome">Site:</label>
			<input type="text" maxlength="40" size="20" name="site" value="{{$fornecedor->site}}" class="form-control">
			&nbsp;
			<label for="nome">Observação:</label>
			<input type="text" name="observacao" value="{{$fornecedor->observacao}}" class="form-control">
		</div>
	</div>
<p></p>
	<div class="container">
		<div class="form-inline">			
			<label for="nome">Banco:</label>
			<input type="text" maxlength="20" size="5" name="banco" value="{{$fornecedor->banco}}" class="form-control">
			&nbsp;
			<label for="nome">Agencia:</label>
			<input type="text" maxlength="4" size="4" name="agencia" value="{{$fornecedor->agencia}}" class="form-control">
			&nbsp;
			<label for="nome">Conta:</label>
			<input type="text" maxlength="10" size="10" name="conta" value="{{$fornecedor->conta}}" class="form-control">
			&nbsp;
			<label for="nome">Tipo:</label>
			<input type="text" maxlength="2" size="2" name="tipo" value="{{$fornecedor->tipo}}" class="form-control">
			&nbsp;
			<label for="nome">Titular:</label>
			<input type="text" name="titular" size="20" value="{{$fornecedor->titular}}" class="form-control">
			&nbsp;
			<label for="nome">CPF Conta:</label>
			<input type="text" size="14" name="cpfconta" value="{{$fornecedor->cpfconta}}" class="form-control">
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
	 <a href="{{route('contato_fornecedor.create',['id'=> $fornecedor->id])}}" type="button" class="btn btn-default pull-right">Novo Contato</a>
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
									<a href="{{route('contato_fornecedor.edit',['id_fornec'=>$fornecedor->id, 'id_contato'=> $contato->id])}}" class="btn btn-xs btn-success">Editar</a>
								</td>

								<td>
									<a href="{{route('contato_fornecedor.delete',['id'=> $contato->id])}}" class="btn btn-xs btn-danger" onclick="return confirm('Deseja excluir cliente: {{$fornecedor->nome}}')">Excluir</a>
								</td>

							</tr>

						@endforeach

					</tbody>
				</table>
			
		</div>
		
	</div>
</div>

@stop
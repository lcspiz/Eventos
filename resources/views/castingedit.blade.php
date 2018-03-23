@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 5px;
	}

	.mygrid-wrapper-div {
    overflow: scroll;
    height: 200px;
}

</style>
<form action="{{route('casting.update',['id'=> $castings->id])}}" method="post">
	<div class="panel panel-default">
	<div class="panel-heading">Editar Casting: {{$castings->nome}} {{$castings->snome}}</div>
	<div class="form-group">
		{{ csrf_field() }}

	<div class="container">
		<div class="form-inline">
			<p></p>
			<label for="nome">Nome:</label>
			<input type="text" name="nome" class="form-control" value="{{$castings->nome}}">
			&nbsp;
			<label for="nome">S.Nome:</label>
			<input type="text" name="snome" class="form-control" value="{{$castings->snome}}" >
			&nbsp;
			<label for="nome">Nascimento:</label>
			<input type="text" maxlength="10" size="10" name="nascimento" id="nascimento" class="form-control" value="{{$castings->nascimento}}" >
			&nbsp;
			<label for="nome">Ativo:</label>
			@if($castings->ativo == 'S')
			<input type="hidden" name="ativo" value="N">
			<input name="ativo" type="checkbox" value="S" checked>
			@else
			<input type="hidden" name="ativo" value="N">
			<input name="ativo" type="checkbox" value="S">
			@endif

		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Fone Res:</label>
			<input type="text" maxlength="15" size="15" name="foneres" id="telefone" value="{{$castings->foneres}}" class="form-control">
			&nbsp;
			<label for="nome">Fone1:</label>
			<input type="text" maxlength="15" size="15" name="fone1" id="telefone" class="form-control" value="{{$castings->fone1}}">
			&nbsp;
			<label for="nome">Fone2:</label>
			<input type="text" maxlength="15" size="15" name="fone2" id="telefone2" class="form-control" value="{{$castings->fone2}}">
			<label for="nome">Sexo:</label>
			<select name="sexo" class="form-control">
				@if($castings->sexo == 'M')
				<option value="M">Masculino</option>
				<option value="F">Feminino</option>
				@else
				<option value="F">Feminino</option>
				<option value="M">Masculino</option>
				@endif
			</select>
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Endereço:</label>
			<input type="text" maxlength="40" size="20" name="endereco" class="form-control" value="{{$castings->endereco}}">
			&nbsp;
			<label for="nome">Numero:</label>
			<input type="text" maxlength="10" size="10" name="numero" class="form-control" value="{{$castings->numero}}">
			&nbsp;
			<label for="nome">Complemento:</label>
			<input type="text" maxlength="20" size="10" name="complemento" class="form-control" value="{{$castings->complemento}}">
			&nbsp;
			<label for="nome">Bairro:</label>
			<input type="text" maxlength="30" size="20" name="bairro" class="form-control" value="{{$castings->bairro}}">
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">CEP:</label>
			<input type="text" maxlength="9" size="9" name="cep" id="cep" class="form-control" value="{{$castings->cep}}">
			&nbsp;
			<label for="nome">Cidade:</label>
			<input type="text" maxlength="30" size="20" name="cidade" class="form-control" value="{{$castings->cidade}}">
			&nbsp;
			<label for="nome">UF:</label>
			<input type="text" maxlength="2" size="2" name="uf" class="form-control" value="{{$castings->uf}}">
			&nbsp;
			<label for="nome">Classificação:</label>
			<select name="classificacao" class="form-control">
				<option value="{{$castings->classificacao}}" selected="selected">{{$castings->classificacao}}</option>
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
			<input type="text" maxlength="12" size="12" name="rg" id="rg" class="form-control" value="{{$castings->rg}}">
			&nbsp;
			<label for="nome">CPF:</label>
			<input type="text" maxlength="18" size="20" name="cpf" id="cpf" class="form-control" value="{{$castings->cpf}}">
			&nbsp;
			<label for="nome">Estado Civil:</label>
			<select name="estado_civil" class="form-control">
				@if($castings->estado_civil == 'solteiro')
				<option value="solteiro">Solteiro</option>
				<option value="casado">Casado</option>
				@else
				<option value="casado">Casado</option>
				<option value="solteiro">Solteiro</option>
				@endif

			</select>
		</div>
	</div>
<p></p>


	<div class="container">
		<div class="form-inline">
			<label for="nome">Email:</label>
			<input type="text" maxlength="60" size="30" name="email" class="form-control" value="{{$castings->email}}">
			&nbsp;
			<label for="nome">Email Secundario:</label>
			<input type="text" maxlength="60" size="30" name="email2" class="form-control" value="{{$castings->email2}}">
			&nbsp;
			<label for="nome">Social:</label>
			<input type="text" maxlength="40" size="20" name="social" class="form-control" value="{{$castings->social}}">
			&nbsp;
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Banco:</label>
			<input type="text" maxlength="20" size="18" name="banco" class="form-control" value="{{$castings->banco}}">
			&nbsp;
			<label for="nome">Agencia:</label>
			<input type="text" maxlength="4" size="4" name="agencia" class="form-control" value="{{$castings->agencia}}">
			&nbsp;
			<label for="nome">Conta:</label>
			<input type="text" maxlength="10" size="10" name="conta" class="form-control" value="{{$castings->conta}}">
			&nbsp;
			<label for="nome">Tipo:</label>
			<input type="text" maxlength="2" size="2" name="tipo" class="form-control" value="{{$castings->tipo}}">
			&nbsp;
			<label for="nome">Titular:</label>
			<input type="text" name="titular" class="form-control" value="{{$castings->titular}}">
			&nbsp;
			<label for="nome">CPF Conta:</label>
			<input type="text" size="15" name="cpfconta" class="form-control" value="{{$castings->cpfconta}}">
			</div>
			<p></p>
	</div>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Contato:</label>
			<input type="text" maxlength="60" size="60" name="contato" class="form-control" value="{{$castings->contato}}">
			&nbsp;
			<label for="nome">Apelido:</label>
			<input type="text" maxlength="60" size="30" name="apelido" class="form-control" value="{{$castings->apelido}}">
		</div>
			<p></p>
					<button type="submit" class="btn btn-primary btn-sm col-md-1 col-md-offset-5">Editar</button>
	</div>


</form>
</div>
</div>
</div>

<div class="row">
	<div class="col-sm-3" style="margin-left: 190px">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Dados Referencias</h3>

<form action="{{route('casting.updatevalor',['id'=> $castings->id])}}" method="post">
	{{ csrf_field() }}
	 <button type="submit" class="btn btn-success pull-right">Gravar</button>
        <div class="clearfix"></div>
    </div>

<p></p>

<div class="panel-body">
	 <div class="mygrid-wrapper-div">
			<table class="table table-hover">
				
					<thead>
						<th>
							Variável
						</th>

						<th>
							Valores
						</th>

					</thead>

					<tbody>
						@foreach($castings1 as $casting1)
							<tr>
								<td>
								{{$casting1->descricao}}
								</td>
								<td>
									<input class="form-control" type="text" size="1" name="{{$casting1->descricao}}" value="{{$casting1->valores}}">

								</td>

							</tr>

							@endforeach

					</tbody>
				</table>
			
		</div>
	</div>
</div>
</div>


<div class="col-sm-3" style="margin-left: 8px">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Idiomas</h3>
	 <button type="submit" class="btn btn-success pull-right">Gravar</button>
        <div class="clearfix"></div>
    </div>
    
<p></p>

		<div class="panel-body">
<div class="mygrid-wrapper-div">
			<table class="table table-hover">
				
					<thead>
						<th>
							Variável
						</th>

						<th>
							Valores
						</th>

					</thead>
					<tbody>
						@foreach($castings2 as $casting2)
							<tr>
								<td>
								{{$casting2->descricao}}
								</td>
								<td>
									<input class="form-control" type="text" size="1" name="{{$casting2->descricao}}" value="{{$casting2->valores}}">

								</td>

							</tr>

							@endforeach
					</tbody>
				</table>
			
			</div>

		</div>
	</div>
</div>
<div class="col-sm-3" style="margin-left: 1px">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Área de Atuação</h3>
	 <button type="submit" class="btn btn-success pull-right">Gravar</button>
        <div class="clearfix"></div>
    </div>
    
<p></p>

		<div class="panel-body">
<div class="mygrid-wrapper-div">
			<table class="table table-hover">
				
					<thead>
						<th>
							Variável
						</th>

						<th>
							Valores
						</th>

					</thead>
					<tbody>
					@foreach($castings4 as $casting4)
							<tr>
								<td>
								{{$casting4->descricao}}
								</td>
								<td>
												<select name="{{$casting4->descricao}}" class="form-control">
												@if($casting4->valores == "Sim")
												<option value="Sim">Sim</option>
												<option value="Não">Não</option>
												@else
												<option value="Não">Não</option>
												<option value="Sim">Sim</option>
												@endif
											</select>

								</td>
							</tr>
					@endforeach
					</tbody>
				</table>
			
			</div>

		</div>
	</div>
</div>

<div class="col-sm-3" style="margin-left: 190px">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Disponibilidades</h3>
	 <button type="submit" class="btn btn-success pull-right">Gravar</button>
        <div class="clearfix"></div>
    </div>
    
<p></p>

		<div class="panel-body">
<div class="mygrid-wrapper-div">
			<table class="table table-hover">
				
					<thead>
						<th>
							Variável
						</th>

						<th>
							Valores
						</th>

					</thead>
					<tbody>
					@foreach($castings5 as $casting5)
							<tr>
								<td>
								{{$casting5->descricao}}
								</td>
								<td>
									<select name="{{$casting5->descricao}}" class="form-control">
												@if($casting5->valores == 'Sim')
												<option value="Sim">Sim</option>
												<option value="Não">Não</option>
												@else
												<option value="Não">Não</option>
												<option value="Sim">Sim</option>
												@endif
											</select>
								</td>
							</tr>
					@endforeach
					</tbody>
				</table>
			
			</div>

		</div>
	</div>

</div>
<div class="col-sm-6" style="margin-left: 10px">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Indicação</h3>
	 <button type="submit" class="btn btn-success pull-right">Gravar</button>
        <div class="clearfix"></div>
    </div>
    
<p></p>

<div class="panel-body">
<div class="mygrid-wrapper-div">
			<table class="table table-hover">
				
					<thead>
						<th>
							Variável
						</th>

						<th>
							Valores
						</th>

					</thead>
					<tbody>
					@foreach($castings3 as $casting3)
							<tr>
								<td>
								{{$casting3->descricao}}
								</td>
								<td>
									@if($casting3->descricao == 'Indicacao' || $casting3->descricao == 'ExperiênciaOutraAgência')
									@if($casting3->valores == 1)
									<input type="hidden" name="ativo" value="N">
									<input name="ativo" type="checkbox" value="S" checked>
									@else
									<input type="hidden" name="ativo" value="N">
									<input name="ativo" type="checkbox" value="S">
									@endif
									@else
									<input class="form-control" type="text" size="1" name="{{$casting3->descricao}}" value="{{$casting3->valores}}">
									@endif
								</td>
							</tr>
					@endforeach
					</tbody>
				</table>
			
			</div>

		</div>
	</div>
</div>
<div class="col-md-9" style="margin-left: 195px">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Informações Complementares</h3>
	 <button type="submit" class="btn btn-success pull-right">Gravar</button>
        <div class="clearfix"></div>
    </div>
    
<p></p>

<div class="panel-body">
<div class="mygrid-wrapper-div">
			<table class="table table-hover">
				
					<thead>
						<th>
							Variável
						</th>

						<th>
							Valores
						</th>

					</thead>
					<tbody>
					@foreach($castings6 as $casting6)
							<tr>
								<td>
								{{$casting6->descricao}}
								</td>
								<td>

									<textarea class="form-control" name="{{$casting6->descricao}}">{{$casting6->valores}}</textarea>

								</td>
							</tr>
					@endforeach
					</tbody>
				</table>
			
			</div>

		</div>
	</div>
</div>
</form>




@stop
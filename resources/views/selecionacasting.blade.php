@extends('welcome')

@section('content')

	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Selecionar Casting</h3>
        <div class="clearfix"></div>
    </div>
<p></p>
		<div class="panel-body">
<form action="{{route('casting.pesquisacasting')}}" method="get">
		<div class="form-inline">
		{{ csrf_field() }}
		<p></p>
		<label for="nome">Estado:</label>
		<select name="uf" id="uf" class="form-control">
				<option value="%">Todos</option>
			@foreach($ufs as $uf)
				<option value="{{$uf->uf}}">{{$uf->uf}}</option>
			@endforeach
		</select>
		<label for="nome">Cidade:</label>
		<select name="cidade" id="cidade" class="form-control">
				<option value="%">Todos</option>
			@foreach($cidades as $cidade)
				<option value="{{$cidade->cidade}}">{{$cidade->cidade}}</option>
			@endforeach
		</select>
		<label for="nome">Área de Atuação:</label>
		<select name="area" class="form-control">
				<option>Selecione</option>
			@foreach($areas as $area)
				<option value="{{$area->descricao}}">{{$area->descricao}}</option>
			@endforeach
		</select>
				<button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
</div>
</form>
<div class="mygrid-wrapper-div">
			<table class="table table-hover">
				<h1></h1>
				<p>Resultados encontrados para: 
				Área de Atuação: <b>{{ app('request')->input('area') }}</b>
				Estado: <b>{{ app('request')->input('uf') }}</b>
				Cidade: <b>{{ app('request')->input('cidade') }}<b></p>
					<thead>
						<th>
							Cod. Fornecedor
						</th>

						<th>
							Nome
						</th>
						<th>
							UF
						</th>

					<th>
							Cidade
						</th>


					</thead>

					<tbody>
						@foreach($castings as $casting)
							<tr>
								<td>
								{{$casting->id}}
								</td>
								<td>
									{{$casting->nome}}
								</td>
								<td>
									{{$casting->uf}}
								</td>
								<td>
									{{$casting->cidade}}
								</td>

							</tr>

						@endforeach

					</tbody>


				</table>
			
		</div>
		
	</div>
</div>
</div>

@stop

	
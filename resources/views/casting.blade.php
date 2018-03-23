@extends('welcome')

@section('content')

	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Manutenção de Casting</h3>
	 <a href="{{route('casting.create')}}" type="button" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> Novo Casting</a>
        <div class="clearfix"></div>
    </div>
<p></p>

<form class="form-inline" action="{{route('casting.pesquisa')}}" style="float:left;">
		<label for="nome">Código:</label>
		<input type="numeric" class="form-control" type="submit" name="codigo">
		<button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
		&nbsp;
</form>


<form class="form-inline" action="{{route('casting.searchMatch')}}">
		<label for="nome">Nome, CPF:</label>
		<input type="text" type="submit" name="query" class="form-control">
		<button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
</form>


		<div class="panel-body">
		  <div class="mygrid-wrapper-div">
			<table class="table table-hover">
				
					<thead>
						<th>
							Código
						</th>

						<th>
							Nome
						</th>

						<th>
							CPF
						</th>
						<th>
							Fone 1
						</th>
						<th>
							Fone 2
						</th>

						<th>
							Cidade
						</th>

						<th>
							Editar
						</th>

						<th>
							Excluir
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
									{{$casting->cpf}}
								</td>
								<td>
									{{$casting->fone1}}
								</td>

								<td>
									{{$casting->fone2}}
								</td>

								<td>
									{{$casting->cidade}}
								</td>

								<td>
									<a href="{{route('casting.edit',['id'=> $casting->id])}}" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-edit"></span> Editar</a>
								</td>

								<td>
									<a href="{{route('casting.delete',['id'=> $casting->id])}}" class="btn btn-xs btn-danger" onclick="return confirm('Deseja excluir casting: {{$casting->nome}}')"><span class="glyphicon glyphicon-remove"></span> Excluir</a>
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


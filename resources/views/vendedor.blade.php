@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 30px;
	}
	.panel-heading h3 {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: normal;
    width: 80%;
    padding-top: 8px;
}	
</style>

	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Manutenção de Vendedores</h3>
	 <a href="{{route('vendedor.create')}}" type="button" class="btn btn-default pull-right">Novo vendedor</a>
        <div class="clearfix"></div>
    </div>
<p></p>

<form class="form-inline" action="{{route('vendedor.pesquisa')}}" style="float:left;">
		<label for="nome">Código:</label>
		<input type="numeric" class="form-control" type="submit" name="codigo">
		<button type="submit" class="btn btn-btn-success">Pesquisar</button>
		&nbsp;
</form>


<form class="form-inline" action="{{route('vendedor.searchMatch')}}">
		<label for="nome">Nome, CNPJ, Fantasia:</label>
		<input type="text" class="form-control" type="submit" name="query">
		<button type="submit" class="btn btn-btn-success">Pesquisar</button>
</form>


		<div class="panel-body">

			<table class="table table-hover">
				
					<thead>
						<th>
							Código
						</th>

						<th>
							Nome
						</th>

						<th>
							Fantasia
						</th>

						<th>
							CNPJ/CPF
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
						@foreach($vendedores as $vendedor)
							<tr>
								<td>
								{{$vendedor->id}}
								</td>
								<td>
									{{$vendedor->nome}}
								</td>
								<td>
									{{$vendedor->fantasia}}
								</td>
								<td>
									{{$vendedor->cnpj}}
								</td>
								<td>
									{{$vendedor->fone1}}
								</td>

								<td>
									{{$vendedor->fone2}}
								</td>

								<td>
									{{$vendedor->cidade}}
								</td>

								<td>
									<a href="{{route('vendedor.edit',['id'=> $vendedor->id])}}" class="btn btn-xs btn-success">Editar</a>
								</td>

								<td>
									<a href="{{route('vendedor.delete',['id'=> $vendedor->id])}}" class="btn btn-xs btn-danger" onclick="return confirm('Deseja excluir vendedor: {{$vendedor->nome}}')">Excluir</a>
								</td>

							</tr>

						@endforeach

					</tbody>
				</table>
			
		</div>
		
	</div>
</div>


@stop


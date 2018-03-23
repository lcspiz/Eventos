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

.mygrid-wrapper-div {
    overflow: scroll;
    height: 400px;
}
</style>

	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Manutenção de Fornecedores</h3>
	 <a href="{{route('fornecedor.create')}}" type="button" class="btn btn-success pull-right">
	 	<span class="glyphicon glyphicon-plus"></span> Novo Fornecedor</a>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
    </div>
<p></p>

<form class="form-inline" action="{{route('fornecedor.pesquisa')}}" style="float:left;">
		<label for="nome">Código:</label>
		<input type="numeric" class="form-control" type="submit" name="codigo">
		<button type="submit" class="btn btn-info">
			<span class="glyphicon glyphicon-search"></span> Pesquisar</button>
		&nbsp;
</form>


<form class="form-inline" action="{{route('fornecedor.searchMatch')}}">
		<label for="nome">Nome, CNPJ, Fantasia:</label>
		<input type="text" type="submit" name="query" class="form-control">
		<button type="submit" class="btn btn-info">
			<span class="glyphicon glyphicon-search"></span> Pesquisar</button>
</form>
		<div class="panel-body">
			<div class="mygrid-wrapper-div">
			<table class="table table-striped">
				
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
						@foreach($fornecedores as $fornecedor)
							<tr>
								<td>
								{{$fornecedor->id}}
								</td>
								<td>
									{{$fornecedor->nome}}
								</td>
								<td>
									{{$fornecedor->fantasia}}
								</td>
								<td>
									{{$fornecedor->cnpj}}
								</td>
								<td>
									{{$fornecedor->fone1}}
								</td>

								<td>
									{{$fornecedor->fone2}}
								</td>

								<td>
									{{$fornecedor->cidade}}
								</td>

								<td>
									<a href="{{route('fornecedor.edit',['id'=> $fornecedor->id])}}" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-edit"></span> Editar</a>
								</td>

								<td>
									<a href="{{route('fornecedor.delete',['id'=> $fornecedor->id])}}" class="btn btn-xs btn-danger" onclick="return confirm('Deseja excluir fornecedor: {{$fornecedor->nome}}')"><span class="glyphicon glyphicon-remove"></span> Excluir</a>
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


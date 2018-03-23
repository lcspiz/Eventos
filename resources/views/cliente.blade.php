@extends('welcome')

@section('content')
<style type="text/css">

.mygrid-wrapper-div {
    overflow: scroll;
    height: 400px;
}

</style>

<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Manutenção de Clientes</h3>
	 <a href="{{route('cliente.create')}}" type="button" class="btn btn-success pull-right">
	 	<span class="glyphicon glyphicon-plus"></span> Novo Cliente</a>
        <div class="clearfix"></div>
    </div>
<p></p>

<style type="text/css">
	.form-inline{
		padding-left: 20px;
	}
</style>

<form class="form-inline" action="{{route('cliente.pesquisa')}}" style="float:left">
		<label for="nome">Código:</label>
		<input type="numeric" type="submit" name="codigo" class="form-control">
		<button type="submit" class="btn btn-info">
			<span class="glyphicon glyphicon-search"></span> Pesquisar</button>
		&nbsp;
</form>

<form class="form-inline" action="{{route('cliente.searchMatch')}}">
		<label for="nome">Nome, CNPJ, Fantasia:</label>
		<input type="text" type="submit" name="query" class="form-control">
		<button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
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
						@foreach($clientes as $cliente)
							<tr>
								<td>
								{{$cliente->id}}
								</td>
								<td>
									{{$cliente->nome}}
								</td>
								<td>
									{{$cliente->fantasia}}
								</td>
								<td>
									{{$cliente->cnpj}}
								</td>
								<td>
									{{$cliente->fone1}}
								</td>
								<td>
									{{$cliente->cidade}}
								</td>

								<td>
									<a href="{{route('cliente.edit',['id'=> $cliente->id])}}" class="btn btn-xs btn-success">
										<span class="glyphicon glyphicon-edit"></span> Editar</a>
								</td>

								<td>
									<a href="{{route('cliente.delete',['id'=> $cliente->id])}}" class="btn btn-xs btn-danger" onclick="return confirm('Deseja excluir cliente: {{$cliente->nome}}')"><span class="glyphicon glyphicon-remove"></span> Excluir</a>
								</td>

							</tr>

						@endforeach

					</tbody>
				</table>
			
		</div>
	</div>
@stop



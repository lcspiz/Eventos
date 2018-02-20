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

    .tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 300px;
}
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
		<button type="submit" class="btn btn-btn-success">
			<span class="glyphicon glyphicon-search"></span> Pesquisar</button>
		&nbsp;
</form>

<form class="form-inline" action="{{route('cliente.searchMatch')}}">
		<label for="nome">Nome, CNPJ, Fantasia:</label>
		<input type="text" type="submit" name="query" class="form-control">
		<button type="submit" class="btn btn-btn-success"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
</form>
		<div class="panel-body">

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
									{{$cliente->fone2}}
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
</div>

@stop



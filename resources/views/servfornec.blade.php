@extends('welcome')

@section('content')
	
<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Adicionar Serviços: {{$fornec->nome}}</h3>
        <div class="clearfix"></div>
    </div>
<p></p>
<form class="form-inline" action="{{route('servico_fornecedor.pesquisa',['id'=>$fornec->id])}}" style="float:left;">
		<label for="nome">Código:</label>
		<input type="numeric" class="form-control" type="submit" name="codigo">
		<button type="submit" class="btn btn-info">
			<span class="glyphicon glyphicon-search"></span> Pesquisar</button>
		&nbsp;
</form>


<form class="form-inline" action="{{route('servico_fornecedor.searchMatch',['id'=>$fornec->id])}}">
		<label for="nome">Descrição:</label>
		<input type="text" type="submit" name="query" class="form-control">
		<button type="submit" class="btn btn-info">
			<span class="glyphicon glyphicon-search"></span> Pesquisar</button>
</form>

		<div class="panel-body">
			<div class="mygrid-wrapper-div">
			<table class="table table-striped">

					<thead>
						<th>
							Código Nv1
						</th>

						<th>
							Descrição Nv1
						</th>

						<th>
							Código Nv2
						</th>

						<th>
							Descrição Nv2
						</th>

		     			<th>
							Código Nv3
						</th>

						<th>
							Descrição Nv3
						</th>

						<th>
							Valor
						</th>

						<th>
							Incluir
						</th>

					</thead>

					<tbody>

						@foreach ($servicos as $serv)

							<tr>
								<td>
									{{$serv->codserv1}}
								</td>
								<td>
									{{$serv->descserv1}}
								</td>
								<td>
									{{$serv->codserv2}}
								</td>
								<td>
									{{$serv->descserv2}}
								</td>
								<td>
									{{$serv->codserv3}}
								</td>

								<td>
								{{$serv->descserv3}}
								</td>

								<td>
									{{$serv->valorserv3}}
								</td>
								@if($serv->codserv3 != null)
								<td>
									<form action="{{route('servico_fornecedor.store3', ['id'=> $serv->codserv3, 'idfornec' => $fornec->id])}}" method="post">
										 {{ csrf_field() }}
									<button type="submit" class="btn btn-xs btn-success">
										<span class="glyphicon glyphicon-ok"></span> Incluir </button>
								</form>
								</td>
								@else
								<td>
									<form action="{{route('servico_fornecedor.store2', ['id'=> $serv->codserv2, 'idfornec' => $fornec->id])}}" method="post">
										 {{ csrf_field() }}
									<button type="submit" class="btn btn-xs btn-success">
										<span class="glyphicon glyphicon-ok"></span> Incluir </button>
								</form>
								</td>
								@endif

							</tr>

					</tbody>
					@endforeach

				</table>
			
		</div>
	</div>

@stop



@extends('welcome')

@section('content')
	
	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Manutenção de Serviços Nv.3</h3>
	 <a href="{{route('serv3.create')}}" type="button" class="btn btn-success pull-right">Novo Serviço Nv.3</a>
        <div class="clearfix"></div>
    </div>
<p></p>

		<div class="panel-body">

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
							Editar
						</th>

						<th>
							Excluir
						</th>


					</thead>

					<tbody>

						@foreach ($serv3 as $serv)
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
						
								<td>
									<a href="{{route('serv3.edit',['id'=> $serv->codserv3])}}" class="btn btn-xs btn-success">Editar</a>
								</td>

								<td>
									<a href="{{route('serv3.delete',['id'=> $serv->codserv3])}}" class="btn btn-xs btn-danger">Excluir</a>
								</td>

							</tr>

					</tbody>
					@endforeach

				</table>

		
		</div>
		
	</div>
</div>

@stop



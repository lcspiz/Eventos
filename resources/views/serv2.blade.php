@extends('welcome')

@section('content')


	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Manutenção de Serviços Nv.2</h3>
	 <a href="{{route('serv2.create')}}" type="button" class="btn btn-success pull-right">
	 	<span class="glyphicon glyphicon-plus"></span> Novo Serviço Nv.2
	 </a>
        <div class="clearfix"></div>
    </div>
<p></p>

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

						@foreach ($serv2 as $serv)
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
									{{$serv->valorserv2}}
								</td>
						
								<td>
									<a href="{{route('serv2.edit',['id'=> $serv->codserv2])}}" class="btn btn-xs btn-success">
										<span class="glyphicon glyphicon-edit"></span> Editar 
									</a>
								</td>

								<td>
									<a href="{{route('serv2.delete',['id'=> $serv->codserv2])}}" class="btn btn-xs btn-danger">
										<span class="glyphicon glyphicon-remove"></span> Excluir
									</a>
								</td>

							</tr>

					</tbody>
					@endforeach


				</table>


		</div>
		
	</div>
</div>
</div>
@stop



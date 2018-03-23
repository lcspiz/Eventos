@extends('welcome')

@section('content')
<style type="text/css">

</style>

	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Manutenção de Serviços Nv.1</h3>
	 <a href="{{route('serv1.create')}}" type="button" class="btn btn-success pull-right">
	 	<span class="glyphicon glyphicon-plus"></span> Novo Serviço Nv.1</a>
        <div class="clearfix"></div>
    </div>
<p></p>

		<div class="panel-body">
		   <div class="mygrid-wrapper-div">
			<table class="table table-striped">

					<thead>
						<th>
							Código
						</th>

						<th>
							Descrição
						</th>

						<th>
							Editar
						</th>

						<th>
							Excluir
						</th>


					</thead>

					<tbody>
						@foreach ($serv1 as $serv)
							<tr>
								<td>
								{{$serv->codigo}}
								</td>
								<td>
								{{$serv->descricao}}
								</td>
						
								<td>
									<a href="{{route('serv1.edit',['id'=> $serv->codigo])}}" class="btn btn-xs btn-success">
									<span class="glyphicon glyphicon-edit"></span> Editar</a>
								</td>

								<td>
									<a href="{{route('serv1.delete',['id'=> $serv->codigo])}}" class="btn btn-xs btn-danger" onclick="return confirm('Deseja excluir serviço: {{$serv->descricao}}')">
									 	<span class="glyphicon glyphicon-remove"></span> Excluir</a>
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



@extends('welcome')

@section('content')


	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Manutenção de Items</h3>
	 <a href="{{route('items.create')}}" type="button" class="btn btn-success pull-right">
	 	<span class="glyphicon glyphicon-plus"></span> Novo Item
	 </a>
        <div class="clearfix"></div>
    </div>
<p></p>

	<div class="panel-body">
		<div class="mygrid-wrapper-div">
			<table class="table table-striped">

					<thead>
						<th>
							Grupo
						</th>

						<th>
							Sub-Grupo
						</th>
						<th>
							Código Item
						</th>


						<th>
							Descrição
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

						@foreach ($items as $item)
							<tr>
								<td>
									{{$item->descgrupo}}
								</td>

								<td>
									{{$item->descsubgrupo}}
								</td>
								<td>
									{{$item->item}}
								</td>

								<td>
								{{$item->descricao}}
								</td>

								<td>
									{{$item->valor}}
								</td>
						
								<td>
									<a href="{{route('items.edit',['id'=> $item->id])}}" class="btn btn-xs btn-success">
										<span class="glyphicon glyphicon-edit"></span> Editar 
									</a>
								</td>

								<td>
									<a href="{{route('items.delete',['id'=> $item->id])}}" class="btn btn-xs btn-danger">
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



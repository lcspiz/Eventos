@extends('welcome')

@section('content')


	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Manutenção de Sub-Grupos</h3>
	 <a href="{{route('subgrupos.create')}}" type="button" class="btn btn-success pull-right">
	 	<span class="glyphicon glyphicon-plus"></span> Novo Sub-Grupo
	 </a>
        <div class="clearfix"></div>
    </div>
<p></p>

	<div class="panel-body">
		<div class="mygrid-wrapper-div">
			<table class="table table-striped">

					<thead>
						<th>
							Código Grupo
						</th>

						<th>
							Código Sub-Grupo
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

						@foreach ($subgrupos as $subgrupo)
							<tr>
								<td>
									{{$subgrupo->id_grupo}}
								</td>

								<td>
									{{$subgrupo->id_subgrupo}}
								</td>

								<td>
								{{$subgrupo->descricao}}
								</td>

								<td>
									{{$subgrupo->valor}}
								</td>
						
								<td>
									<a href="{{route('subgrupos.edit',['id'=> $subgrupo->id])}}" class="btn btn-xs btn-success">
										<span class="glyphicon glyphicon-edit"></span> Editar 
									</a>
								</td>

								<td>
									<a href="{{route('subgrupos.delete',['id'=> $subgrupo->id])}}" class="btn btn-xs btn-danger">
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



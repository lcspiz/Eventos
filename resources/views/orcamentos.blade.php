@extends('welcome')

@section('content')


<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Orçamentos</h3>
	 <a href="{{route('orcamentos.create')}}" type="button" class="btn btn-success pull-right">
	 	<span class="glyphicon glyphicon-plus"></span> Novo Orçamento
	 		 </a>
        <div class="clearfix"></div>
    </div>
<p></p>

	<div class="panel-body">
		<div class="mygrid-wrapper-div">
			<table class="table table-striped">

					<thead>
						<th>
							Numero
						</th>

						<th>
							Versão
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

						@foreach ($orcamentos as $orcamento)
							<tr>
								<td>
									{{$orcamento->orcamento}}
								</td>
								<td>
									{{$orcamento->cliente}}
								</td>
								<td>
									{{$orcamento->meio}}
								</td>
								
								<td>
									<a href="{{route('orcamentos.edit',['id'=> $orcamento->id])}}" class="btn btn-xs btn-success">Editar</a>
								</td>

								<td>
									<a href="{{route('orcamentos.delete',['id'=> $orcamento->id])}}" class="btn btn-xs btn-danger">Excluir</a>
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



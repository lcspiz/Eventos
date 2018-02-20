@extends('welcome')

@section('content')
<style type="text/css">
	.form-group{
		padding-left: 30px;
	}
	.panel-heading h3 {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: normal;
    width: 75%;
    padding-top: 8px;
}	
</style>

	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Manutenção de Contas</h3>
	 <a href="{{route('contacorrente.create')}}" type="button" class="btn btn-default pull-right">Nova Conta</a>
        <div class="clearfix"></div>

    </div>
</div>
		<div class="panel-body">

			<table class="table table-hover">
				
					<thead>
						<th>
							Banco
						</th>

						<th>
							Agencia
						</th>

						<th>
							Conta
						</th>

						<th>
							Titular
						</th>

						<th>
							Editar
						</th>

						<th>
							Excluir
						</th>



					</thead>

					<tbody>
						@foreach($contas as $conta)
							<tr>
								<td>
								{{$conta->banco}}
								</td>
								<td>
									{{$conta->agencia}}
								</td>
								<td>
									{{$conta->conta}}
								</td>
								<td>{{$conta->titular}}</td>

								<td>
									<a href="{{route('contacorrente.edit',['id'=> $conta->codbanco])}}" class="btn btn-xs btn-success">Editar</a>
								</td>

								<td>
									<a href="{{route('contacorrente.delete',['id'=> $conta->codbanco])}}" class="btn btn-xs btn-danger" onclick="return confirm('Deseja excluir conta do titular: {{$conta->titular}}')">Excluir</a>
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



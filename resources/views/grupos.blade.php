@extends('welcome')

@section('content')
	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Manutenção de Grupos</h3>
	 <a href="{{route('grupos.create')}}" type="button" class="btn btn-success pull-right">
	 	<span class="glyphicon glyphicon-plus"></span> Novo Grupo</a>
        <div class="clearfix"></div>
    </div>
<p></p>

		<div class="panel-body">

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
                        @foreach($grupos as $grupo)
                            <tr>
                                <td>
                                {{$grupo->id}}
                                </td>
                                <td>
                                    {{$grupo->descricao}}
                                </td>

                                <td>
                                    <a href="{{route('grupos.edit',['id'=> $grupo->id])}}" class="btn btn-xs btn-success">
                                        <span class="glyphicon glyphicon-edit"></span> Editar</a>
                                </td>

                                <td>
                                    <a href="{{route('grupos.delete',['id'=> $grupo->id])}}" class="btn btn-xs btn-danger" onclick="return confirm('Deseja excluir grupo: {{$grupo->descricao}}')"><span class="glyphicon glyphicon-remove"></span> Excluir</a>
                                </td>

                            </tr>

                        @endforeach

                    </tbody>


				</table>
			
		</div>
		
	</div>
</div>

@stop



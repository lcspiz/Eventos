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
									{{$serv->codigo}}
								</td>

								<td>
								{{$serv->descricao}}
								</td>

								<td>
									{{$serv->valor}}
								</td>
						
								<td>
									<a href="{{route('serv3.edit',['id'=> $serv->codigo])}}" class="btn btn-xs btn-success">Editar</a>
								</td>

								<td>
									<a href="{{route('serv3.delete',['id'=> $serv->codigo])}}" class="btn btn-xs btn-danger">Excluir</a>
								</td>

							</tr>

					</tbody>
					@endforeach

				</table>
			
		</div>
		
	</div>
</div>

@stop



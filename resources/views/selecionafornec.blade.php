@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 8px;
	}
	.panel-heading h3 {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: normal;
    width: 80%;
    padding-top: 8px;
}	
</style>

	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading"><h3 class="panel-title pull-left">
					Selecionar Fornecedores</h3>
        <div class="clearfix"></div>
    </div>
<p></p>
		<div class="panel-body">
<form action="{{route('fornecedor.pesquisafornec')}}" method="get">
		<div class="form-inline">
		{{ csrf_field() }}
		<p></p>
		<label for="nome">Estado:</label>
		<select name="uf" id="uf" class="form-control">
				<option value="%">Todos</option>
			@foreach($ufs as $uf)
				<option value="{{$uf->uf}}">{{$uf->uf}}</option>
			@endforeach
		</select>
		<label for="nome">Cidade:</label>
		<select name="cidade" id="cidade" class="form-control">
				<option value="%">Todos</option>
			@foreach($cidades as $cidade)
				<option value="{{$cidade->cidade}}">{{$cidade->cidade}}</option>
			@endforeach
		</select>
	</div>
		<div class="form-inline">
		{{ csrf_field() }}
		<p></p>
		<label for="nome">Código Nv1:</label>
		<select name="codserv1" id="codserv1" class="form-control">
				<option>Selecione</option>
			@foreach($servicos1 as $serv)
				<option value="{{$serv->codigo}}">{{$serv->codigo}} - {{$serv->descricao}}</option>
			@endforeach
		</select>
		<label for="nome">Código Nv2:</label>
		<select name="codserv2" id="codserv2" class="form-control" style="width: 200px;">
			
		</select>
		<label for="nome">Código Nv3:</label>
		<select name="codserv3" id="codserv3" class="form-control" style="width: 200px;">
		</select>
		<button type="submit" class="btn btn-btn-success">Pesquisar</button>
		<p></p>
	</div>
</form>
			<table class="table table-hover">
				<h1></h1>
				<p>Resultados encontrados para: 
				Codserv1: <b>{{ app('request')->input('codserv1') }}</b>
				Codserv2: <b>{{ app('request')->input('codserv2') }}</b>
				Codserv3: <b>{{ app('request')->input('codserv3') }}</b>
				Estado: <b>{{ app('request')->input('uf') }}</b>
				Cidade: <b>{{ app('request')->input('cidade') }}<b></p>
					<thead>
						<th>
							Cod. Fornecedor
						</th>

						<th>
							Nome
						</th>
						<th>
							UF
						</th>

					<th>
							Cidade
						</th>


					</thead>

					<tbody>
						@foreach($fornecedores as $fornecedor)
							<tr>
								<td>
								{{$fornecedor->id}}
								</td>
								<td>
									{{$fornecedor->nome}}
								</td>
								<td>
									{{$fornecedor->uf}}
								</td>
								<td>
									{{$fornecedor->cidade}}
								</td>

							</tr>

						@endforeach

					</tbody>
				</table>
			
		</div>
		
	</div>
</div>
<script type="text/javascript">
    $('#codserv1').change(function(){
    var codserv1 = $(this).val();    
    if(codserv1){
        $.ajax({
        type: "GET",
		async: true,
		dataType: 'json',
		url: '/serv2/get/' + codserv1,
           success:function(res){               
            if(res){
                $("#codserv2").empty();
                $("#codserv3").empty();
                $("#codserv2").append('<option>Selecione</option>');
                $.each(res,function(key,value){
                    $("#codserv2").append('<option value="'+value+'">'+value+' - '+key+'</option>');
                });
           
            }else{
               $("#codserv2").empty();
            }
           }
        });
    }else{
        $("#codserv2").empty();
    }      
   });
</script>

<script type="text/javascript">
    $('#codserv2').change(function(){
    var codserv2 = $(this).val();    
    if(codserv2){
        $.ajax({
        type: "GET",
		async: true,
		dataType: 'json',
		url: '/serv3/get/' + codserv2,
           success:function(res){               
            if(res){
                $("#codserv3").empty();
                $("#codserv3").append('<option value=""></option>');
                $.each(res,function(key,value){
                    $("#codserv3").append('<option value="'+value+'">'+value+' - '+key+'</option>');
                });
           
            }else{
               $("#codserv3").empty();
            }
           }
        });
    }else{
        $("#codserv3").empty();
    }      
   });
</script>

@stop

	
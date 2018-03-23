@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 30px;
	}
</style>
<form action="{{route('serv3.update',['id'=> $servicos3->codserv3])}}" method="post">
	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading">Editar Serviço Nv.3</div>
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
		<select name="codserv2" id="codserv2" class="form-control" style="width: 150px;">
			
		</select>
		<label for="nome">Código:</label>
		<input type="text" class="form-control" maxlength="10" size="10" name="codigo" value="{{$servicos3->codserv3}}">
		<label for="nome">Descrição:</label>
		<input type="text" name="descricao" class="form-control" value="{{$servicos3->descserv3}}">
		<label for="nome">Valor:</label>
		<input type="text" name="valor" class="form-control" value="{{$servicos3->valorserv3}}">
		<button type="submit" class="btn btn-btn-success">Cadastrar</button>
		<p></p>
	</div>
	</div>
</div>
</div>
</form>
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
@stop
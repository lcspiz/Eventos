@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 30px;
	}
</style>
<form action="{{route('items.update',['id'=> $item->id])}}" method="post">
	<div class="container">
	<div class="panel panel-default">
	<div class="panel-heading">Editar Item: {{$item->descricao}}</div>
	<div class="form-inline">
		{{ csrf_field() }}
		<p></p>
		<label for="nome">Grupo:</label>
		<select name="codgrupo" id="codgrupo" class="form-control">
			<option>Selecione</option>
			@foreach($grupos as $grupo)
				<option value="{{$grupo->codigo}}">{{$grupo->codigo}} - {{$grupo->descricao}}</option>
			@endforeach
			
		</select>
		<label for="nome">Subgrupo:</label>
		<select name="codsubgrupo" id="codsubgrupo" class="form-control" style="width: 150px;">
			
		</select>
		<label for="nome">Código:</label>
		<input type="text" class="form-control" maxlength="10" size="10" name="codigo" value="{{$item->item}}">
		<label for="nome">Descrição:</label>
		<input type="text" name="descricao" class="form-control" value="{{$item->descricao}}">
		<label for="nome">Valor:</label>
		<input type="text" name="valor" class="form-control" value="{{$item->valor}}">
		<button type="submit" class="btn btn-btn-success">Cadastrar</button>
		<p></p>
	</div>
	</div>
</div>
</div>
</form>
</fieldset>
<script type="text/javascript">
    $('#codgrupo').change(function(){
    var codgrupo = $(this).val();    
    if(codgrupo){
        $.ajax({
        type: "GET",
		async: true,
		dataType: 'json',
		url: '/subgrupos/get/' + codgrupo,
           success:function(res){               
            if(res){
                $("#codsubgrupo").empty();
                $("#codsubgrupo").append('<option>Selecione</option>');
                $.each(res,function(key,value){
                    $("#codsubgrupo").append('<option value="'+value+'">'+value+' - '+key+'</option>');
                });
           
            }else{
               $("#codsubgrupo").empty();
            }
           }
        });
    }else{
        $("#codsubgrupo").empty();
    }      
   });
</script>
@stop
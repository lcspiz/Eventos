@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 5px;
	}

	textarea.form-control {
		padding-left: 5px;
 		height: 100%;
  		width: 95%;
}

</style>
<form action="{{route('orcamentos.store')}}" method="post">
	<div class="panel panel-default">
	<div class="panel-heading">Cadastro de Orçamentos</div>
	<div class="form-group">
		{{ csrf_field() }}

	<div class="container">
		<div class="form-inline">
			<p></p>
			
			<label for="nome">Cliente:</label>
			<input type="text" name="id_cliente" id="id_cliente" maxlength="5" size="5" class="form-control">
			&nbsp;
			<input type="text" name="cliente" id="cliente" size="60" class="form-control" readonly>
			&nbsp;
			<label for="nome">Validade:</label> 
			<input type="text" size="2" name="validade" class="form-control">
			&nbsp;
			<label for="nome">Apres:</label> 
			<input type="text" size="10" name="apresentacao" id="apres" class="form-control">
			&nbsp;
			<label for="nome">Hora:</label> 
			<input type="text" size="2" name="hrapresentacao" class="form-control">
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Campanha:</label>
			<input type="text" size="120" name="campanha" class="form-control">
		</div>
	</div>
<p></p>
	<div class="container">
		<div class="form-inline">
			<label for="nome">Dt.Inicio:</label>
			<input type="text" size="10" maxlength="10" name="dtinicio" id="dtinicio" class="form-control">
			&nbsp;
			<label for="nome">Hora:</label>
			<input type="text" maxlength="5" size="5" name="hr_inicio" id="hrinicio" class="form-control">
			&nbsp;
			<label for="nome">Dt.Final:</label>
			<input type="text" size="10" maxlength="10" name="dtfinal" id="dtfinal" class="form-control">
			&nbsp;
			<label for="nome">Hora:</label>
			<input type="text" maxlength="5" size="5" name="hr_final" id="hr_final" class="form-control">
			&nbsp;
			<label for="nome">Entrega:</label>
			<input type="text" maxlength="10" size="10" name="prz_entrega" id="entrega" class="form-control">
			&nbsp;
			<label for="nome">Hora:</label>
			<input type="text" maxlength="5" size="2" name="hrentrega" id="hrentrega" class="form-control">
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Meio:</label>
			<input type="text" maxlength="60" size="30" name="meio" class="form-control">
			&nbsp;
			<label for="nome">Espécie:</label>
			<input type="text" maxlength="60" size="30" name="especie" class="form-control">
			&nbsp;
			<label for="nome">Produto:</label>
			<input type="text" maxlength="60" size="60" name="produto" class="form-control">
		</div>
	</div>
<p></p>

	<div class="container">
			<div class="form-inline">
				<label for="nome">Titulo:</label>
				<input type="text" maxlength="60" size="60" name="titulo" class="form-control">
				&nbsp;
				<label for="nome">Formato:</label>
				<input type="text" maxlength="60" size="60" name="formato" class="form-control">
			</div>
		</div>
		<p></p>
		<div class="container">
			<div class="form-inline">
				<label for="nome">Responsável:</label>
				<input type="text" maxlength="60" size="60" name="responsavel" class="form-control">
				&nbsp;
				<label for="nome">Praça:</label>
				<input type="text" maxlength="60" size="60" name="praca" class="form-control">
			</div>
		</div>
<div class="container">
			<div class="form-group">
				<p></p>
				<label for="nome">Observação:</label>
				<textarea class="form-control" name="observacao" rows="4"></textarea>
				<p></p>
				<button id="orcamentocad" class="btn btn-primary btn-sm col-md-1 col-md-offset-5">Cadastrar</button>
			</div>
		</div>

	</div>
</div>
</form>
<script type="text/javascript">
$(document).ready(function(){
	$('#id_cliente').change(function(){
    cliente = $(this).val();    
    if(cliente){
        $.ajax({
        type: "GET",
		async: true,
		dataType: 'json',
		url: '/clientes/get/' + cliente,
           success:function(res){               
            if(res){
                $("#cliente").empty();
                $.each(res,function(key,value){
                	$("#cliente").val(value);
                    $("#cliente").attr("value",value);

                });
           
            }else{
               $("#cliente").empty();
            }
           }
        });
    }else{
        $("#cliente").empty();
    }      
   });
});

</script>
@stop
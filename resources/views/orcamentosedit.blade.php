@extends('welcome')

@section('content')
<style type="text/css">
	.form-inline{
		padding-left: 5px;
	}

		textarea.form-control {
		padding-left: 10px;
 		height: 100%;
  		width: 95%;
}

.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
    top: -5px;
    left: 105%;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}

</style>

<form action="{{route('orcamentos.update',['id'=> $orcamento->id])}}" method="post">
	<div class="panel panel-default">
	<div class="panel-heading">Editar Orçamento: {{$orcamento->orcamento}}</div>
	<div class="form-group">
		{{ csrf_field() }}
	<div class="container">
		<div class="form-inline">
			<p></p>
			<input type="hidden" name="orcamento" id="orcamento" value="{{$orcamento->orcamento}}">
			<input type="hidden" name="id_orcamento" id="id_" value="{{$orcamento->orcamento}}">

			<label for="nome">Cliente:</label>
			<input type="text" readonly name="id_cliente" id="id_cliente" maxlength="5" size="5" class="form-control" value="{{$orcamento->cliente}}">
			&nbsp;
			<label for="nome">Versão:</label>
			<input type="text" readonly name="versao" id="versao" size="1" class="form-control" value="{{$orcamento->versao}}">
			&nbsp;
			<input type="text" name="cliente" id="cliente" size="60" class="form-control" readonly>
			&nbsp;
			<label for="nome">Validade:</label> 
			<input type="text" size="2" name="validade" class="form-control" value="{{$orcamento->validade}}">
			&nbsp;
			<label for="nome">Apres:</label> 
			<input type="text" size="10" name="apresentacao" id="apres" class="form-control" value="{{$orcamento->apresentacao}}">
			&nbsp;
			<label for="nome">Hora:</label> 
			<input type="text" size="2" name="hrapresentacao" class="form-control" value="{{$orcamento->hrapresentacao}}">
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Campanha:</label>
			<input type="text" size="120" name="campanha" class="form-control" value="{{$orcamento->campanha}}">
		</div>
	</div>
<p></p>
	<div class="container">
		<div class="form-inline">
			<label for="nome">Dt.Inicio:</label>
			<input type="text" size="10" maxlength="10" name="dtinicio" id="dtinicio" class="form-control" value="{{$orcamento->dt_inicio}}">
			&nbsp;
			<label for="nome">Hora:</label>
			<input type="text" maxlength="5" size="5" name="hr_inicio" id="hrinicio" class="form-control" value="{{$orcamento->hr_inicio}}">
			&nbsp;
			<label for="nome">Dt.Final:</label>
			<input type="text" size="10" maxlength="10" name="dtfinal" id="dtfinal" class="form-control" value="{{$orcamento->dt_final}}">
			&nbsp;
			<label for="nome">Hora:</label>
			<input type="text" maxlength="5" size="5" name="hr_final" id="hr_final" class="form-control" value="{{$orcamento->hr_final}}">
			&nbsp;
			<label for="nome">Entrega:</label>
			<input type="text" maxlength="10" size="10" name="prz_entrega" id="entrega" class="form-control" value="{{$orcamento->prz_entrega}}">
			&nbsp;
			<label for="nome">Hora:</label>
			<input type="text" maxlength="5" size="4" name="hrentrega" id="hrentrega" class="form-control" value="{{$orcamento->hrentrega}}"> 
		</div>
	</div>
<p></p>

	<div class="container">
		<div class="form-inline">
			<label for="nome">Meio:</label>
			<input type="text" maxlength="60" size="30" name="meio" class="form-control" value="{{$orcamento->meio}}">
			&nbsp;
			<label for="nome">Espécie:</label>
			<input type="text" maxlength="60" size="30" name="especie" class="form-control" value="{{$orcamento->especie}}">
			&nbsp;
			<label for="nome">Produto:</label>
			<input type="text" maxlength="60" size="60" name="produto" class="form-control" value="{{$orcamento->produto}}">
		</div>
	</div>
<p></p>

	<div class="container">
			<div class="form-inline">
				<label for="nome">Titulo:</label>
				<input type="text" maxlength="60" size="60" name="titulo" class="form-control" value="{{$orcamento->titulo}}">
				&nbsp;
				<label for="nome">Formato:</label>
				<input type="text" maxlength="60" size="60" name="formato" class="form-control" value="{{$orcamento->formato}}"> 
			</div>
		</div>
		<p></p>
		<div class="container">
			<div class="form-inline">
				<label for="nome">Responsável:</label>
				<input type="text" maxlength="60" size="60" name="responsavel" class="form-control" value="{{$orcamento->responsavel}}">
				&nbsp;
				<label for="nome">Praça:</label>
				<input type="text" maxlength="60" size="60" name="praca" class="form-control" value="{{$orcamento->praca}}">
			</div>
		</div>
<div class="container">
			<div class="form-group">
				<p></p>
				<label for="nome">Observação:</label>
				<textarea class="form-control" name="observacao" rows="4">{{$orcamento->descricao}}</textarea>
				<p></p>
				<button id="orcamentocad" type="submit" class="btn btn-primary btn-sm col-md-1 col-md-offset-5">Editar</button>
			</div>
		</div>

	</div>
</div>
</form>
<div class="panel panel-default">
	<div class="panel-heading">Cadastro de Items</div>
	<div class="container">
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
		&nbsp;
		<label for="nome">Subgrupo:</label>
		<select name="codsubgrupo" id="codsubgrupo" class="form-control" style="width: 280px;">
			
		</select>
		&nbsp;
		<label for="nome">Item:</label>
		<select name="item" id="item" class="form-control" style="width: 280px;">
			
		</select>

	</div>
</div>
<p></p>
		<div class="container">
		<div class="form-inline">
				<meta name="csrf-token" content="{{ csrf_token() }}">
				<label for="nome">Valor:</label>
				<input type="text" name="valor" id="valor" class="form-control" readonly>
				&nbsp;
				<label for="nome">Qtde:</label>
				<input type="text" size="10" name="qtde" id="qtde" class="form-control">
				&nbsp;
				<label for="nome">Dias:</label>
				<input type="text" size="5" name="dias" id="dias" class="form-control">
				&nbsp;
				<label for="nome">Custo Unitário:</label>
				<input type="text" size="5" name="custoun" id="custoun" class="form-control">
				&nbsp;
				<label for="nome">Custo Total:</label>
				<input type="text" size="5" name="custotot" id="custotot" class="form-control" readonly>
				<p></p>
			</div>
	</div>
		<div class="container">
		<div class="form-inline">
				<meta name="csrf-token" content="{{ csrf_token() }}">
				<label for="nome">Vl. Unitário:</label>
				<input type="text" name="valorun" id="valorun" class="form-control" >
				&nbsp;
				<label for="nome">Vl. Total:</label>
				<input type="text" size="10" name="valortot" id="valortot" class="form-control" readonly>
				&nbsp;
				<label for="nome">Rentabilidade:</label>
				<input type="text" size="5" name="rentabilidade" id="rentabilidade" class="form-control" readonly>
				&nbsp;
				<label for="nome">%:</label>
				<input type="text" size="8" name="porcent" id="porcent" class="form-control" readonly>
				&nbsp;
				<button id="cadastrar" class="btn btn-info">Gravar</button>
				</div>
	</div>

	<div class="container">
			<div class="form-group">
				<p></p>
				<label for="nome">Observação do item:</label>
				<textarea class="form-control" name="obsitem" id="obsitem" rows="4"></textarea>
				<p></p>
			</div>
		</div>

	<div class="panel-body">
		<div class="mygrid-wrapper-div">
			<table class="table table-striped" id="orcamento">

					<thead>
						<th>
							GR
						</th>

						<th>
							S.GR
						</th>

						<th>
							S.Item
						</th>

						<th>
							Descrição do Item
						</th>
						<th>
							Obs.
						</th>

						<th>
							Qtde.
						</th>
						<th>
							Dias.
						</th>
						<th>
							Custo Unitário
						</th>
						<th>
							Custo Total
						</th>
						<th>
							Vl. Unitário
						</th>
						<th>
							Vl. Total
						</th>
						<th>
							Rentabilidade
						</th>
						<th>
							%
						</th>
						<th>
							Editar
						</th>
						<th>
							Excluir
						</th>


					</thead>

					<tbody>

					</tbody>


				</table>


		</div>
		
	</div>

</div>

<script type="text/javascript">
    $('#codgrupo').bind("click",function(){
    codgrupo = $(this).val();
    getSubgrupo(codgrupo);
   });

function getSubgrupo(codgrupo){
    if(codgrupo){
        $.ajax({
        type: "GET",
		async: true,
		dataType: 'json',
		url: '/subgrupos/get/' + codgrupo,
           success:function(res){               
            if(res){
                $("#codsubgrupo").empty();
                $("#valor").val('');
                $("#item").val('');
                $("#qtde").val('');
                $("#dias").val('');
                $("#custoun").val('');
                $("#custotot").val('');
                $("#codsubgrupo").append('<option>Selecione</option>');
                $.each(res,function(key,value){
                    $("#codsubgrupo").append('<option value="'+value+'">'+value+' - '+key+'</option>');
                });
           
            }else{
               $("#codsubgrupo").empty();
               $("#valor").val('');
            }
           }
        });
    }else{
        $("#codsubgrupo").empty();
        $("#valor").val('');
    } 

}

   $('#codsubgrupo').bind("change",function(){
    codsubgrupo = $(this).val();    
    getItem(codsubgrupo);
   });

function getItem(codsubgrupo){
	    if(codsubgrupo){
        $.ajax({
        type: "GET",
		async: true,
		dataType: 'json',
		url: '/items/get/' + codgrupo + '/' + codsubgrupo,
           success:function(res){               
            if(res){
                $("#item").empty();
                $("#valor").val('');
                $("#item").append('<option>Selecione</option>');
                $.each(res,function(key,value){
                    $("#item").append('<option value="'+value+'">'+  key+ '</option>');
                });
           
            }else{
               $("#item").empty();
               $("#valor").val('');
            }
           }
        });
    }else{
        $("#item").empty();
        $("#valor").val('');
    } 
}


$('#item').change(function(){
    item = $(this).val();    
	getValor(item);    
});

function getValor(){
	    if(item){
        $.ajax({
        type: "GET",
		async: true,
		dataType: 'json',
		url: '/items/getvalor/' + codgrupo + '/' + codsubgrupo + '/' + item,
           success:function(res){               
            if(res){
                $("#valor").empty();
                $.each(res,function(key,value){
                	$("#valor").val(value);
                    $("#valor").attr("value",value);

                });
           
            }else{
               $("#valor").empty();
            }
           }
        });
    }else{
        $("#valor").empty();
    }  
}



$( "#cadastrar" ).click(function() {
   	var trHTML = '';
   	var id_orcamento = {{$orcamento->id}};
   	var grupo = document.getElementById('codgrupo').value;
   	var subgrupo = document.getElementById('codsubgrupo').value;
   	var item = document.getElementById('item').value;
 	var descitem = $( "#item option:selected" ).text();
 	var qtde = document.getElementById('qtde').value;
 	var dias = document.getElementById('dias').value;
 	var custoun = document.getElementById('custoun').value;
 	var custotot = document.getElementById('custotot').value;
 	var valun = document.getElementById('valorun').value;
 	var valortot = document.getElementById('valortot').value;
 	var rentabilidade = document.getElementById('rentabilidade').value;
 	var porcent = document.getElementById('porcent').value;
 	var obsitem = $.trim($('#obsitem').val());

 	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

 	  $.ajax({
        type: "POST",
		data: "codgrupo=" + grupo + "&codsubgrupo=" + subgrupo + "&item=" + item + "&descitem=" + descitem + "&qtde=" + qtde + "&valortot=" + valortot + "&rentabilidade=" + rentabilidade + "&porcent=" + porcent + "&id_orcamento=" + id_orcamento + "&dias=" + dias + "&custoun=" + custoun + "&custotot=" + custotot + "&valorun=" + valun + "&obsitem=" + obsitem, 
		url: "/salvaItem",
           success:function(data){  
           		$("td").empty();
           		getItems();

            }
           
        });
 	
});

function getItems(){
    	$.ajax({
        type: "GET",
        async: true,
		dataType: 'json',
		url: "{{action('OrcamentosController@getItems',['id'=>$orcamento->id])}}",
           success:function(data){    
           html = '';       
		   console.log(data);
		   for(var i=0; i < data.length; i++){
		   	var editB = "<button onclick="+ 'editItem('+data[i].id+')' +" class=" + 'btn-success' + " >Editar</td>";
		   	var deleteB = "<button onclick="+ 'deleteItem('+data[i].id+')' +" class=" + 'btn-danger' + " >Excluir</td>";  
		   		html += '<tr>'+
                '<td>' + data[i].grupo + '</td>' +
                '<td>' + data[i].subgrupo + '</td>' +
                '<td>' + data[i].item + '</td>' +
                '<td>' + data[i].descitem + '</td>' +
                '<td><a data-toggle="tooltip" title="'+ data[i].obsitem + '">Info</a></td>' +
                '<td>' + data[i].qtde + '</td>' +
                '<td>' + data[i].dias + '</td>' +
                '<td>' + data[i].custoun + '</td>' +
                '<td>' + data[i].custotot + '</td>' +
                '<td>' + data[i].valorun + '</td>' +
                '<td>' + data[i].valortot + '</td>' +
                '<td>' + data[i].rentabilidade + '</td>' +
                '<td>' + data[i].porcent + '</td>' +
                '<td>' + editB + 
                '<td>' + deleteB
		   }   
		   $('#orcamento tr').first().after(html); 
           }
        });
    }
function editItem(id) {
	$.ajax({
        type: "GET",
        async: false,
		dataType: 'json',
		url: "/editItem/" + id,
		success:function(data){
			$("#codgrupo").val(data.grupo);

		}
});
}

function deleteItem(id) {
		$.ajax({
        type: "GET",
        async: true,
		dataType: 'json',
		url: "/deleteItem/" + id,
		success:function(data){
			$("td").empty();
			getItems();
		}
});
}

$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
   getItems();
   var cliente = document.getElementById('id_cliente').value;
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

    function custoTotal() {
          var qtde = $('#qtde').val();
          var dias = $('#dias').val();
          var custoun = $('#custoun').val();
          var custotot = qtde * dias * custoun;
          $('#custotot').val(custotot);
        } 

        $('#qtde, #dias, #custoun').keyup(custoTotal);   

    function valorTotal() {
          var qtde = $('#qtde').val();
          var dias = $('#dias').val();
          var valorun = $('#valorun').val();
          var valortot = qtde * dias * valorun;
          $('#valortot').val(valortot);
        } 

        $('#qtde, #dias, #valorun').keyup(valorTotal);   

    function rentabilidade() {
          var custoun = $('#custoun').val();
          var valortot = $('#valortot').val();
          var rentabilidade = valortot - custoun;
          $('#rentabilidade').val(rentabilidade);
        } 

        $('#qtde, #dias, #valorun').keyup(rentabilidade);

    function porcent() {
          var custotot = $('#custotot').val();
          var valortot = $('#valortot').val();
          var porcent = (custotot / valortot) * 100;
          var result = Math.round(porcent*100)/100
          $('#porcent').val(result);
        } 

        $('#qtde, #dias, #valorun').keyup(porcent);

});
        

</script>

@stop
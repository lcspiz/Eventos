<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('jquery.mask.js')}}"></script>
<script src="{{asset('mascaras.js')}}"></script>

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <title>Eventos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style type="text/css">

                .dropdown-submenu .dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: 1px;
                border-top-color: #000000;
                border-bottom-color: #000000;
                background-color: #0000000;
                }

                .dropdown-header{
                  font-size: 12px;
                }
            html, body {
                background-color: #fff;
                color: black;
                font-family: 'Arial', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .navbar-default{
              border-top-color: #000000;
              border-bottom-color: #000000;
              background-color: #0000000;
            }

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

              .mygrid-wrapper-div {
                overflow: scroll;
                height: 500px;
            }
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
    </head>
    <body>
        <nav class="navbar navbar-inverse bg-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <a class="navbar-brand" href="/">Eventos</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manutenções<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="{{route('castings')}}">Casting</a></li>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="{{route('clientes')}}">Clientes</a></li>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="{{route('fornecedores')}}">Fornecedor</a></li>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="{{route('vendedores')}}">Vendedor</a></li>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Jobs</a> </li>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Eventos</a></li>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Locais</a></li>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="{{route('serv1')}}">Serviços Nv 1</a></li>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="{{route('serv2')}}">Serviços Nv 2</a></li>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="{{route('serv3')}}">Serviços Nv 3</a></li>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="{{route('grupos')}}">Grupos</a></li>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="{{route('subgrupos')}}">Sub Grupos</a> </li>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Item</a></li>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Usuários</a></li>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Logout</a></li>
            </li>
          </ul>
    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relatórios<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Jobs</a>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Rentabilidade</a>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Eventos</a>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Avaliação</a>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Avaliação Job</a> 
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Orçamentos</a>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Orçamentos Declinados</a>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Orçamentos x Jobs</a>
            </li>
          </ul>
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Processos<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="{{route('casting.selecionacasting')}}">Seleciona Casting</a>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="{{route('fornecedor.selecionafornec')}}">Seleciona Fornecedor</a>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Processa Pagamentos</a>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Orçamentos</a>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Casting Atualização Mailing</a> 
            </li>
          </ul>
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relacionamento<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Acompanhamento</a>
              <li class="dropdown-toggle"><a class="test" tabindex="-1" href="#">Planilha de Atendimento</a>
            </li>
          </ul> 

          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contas A Receber<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li class="dropdown-header">Relatórios</li>
              <li><a href="#">Data de Referência</a></li>
              <li><a href="#">Data de Pagamento</a></li>
              <li><a href="#">Data de Movimento</a></li>
              <li><a href="#">Data de Vencimento</a></li>
              <li><a href="#">Por Job</a></li>

              <li class="divider"></li>
              <li class="dropdown-header">Manutenção</li>
              <li><a href="#">Recebimentos</a></li>
              <li><a href="#">Baixa Por Banco</a></li>
              <li><a href="#">Baixa Por Documento</a></li>

              <li class="divider"></li>
              <li class="dropdown-header">Outros</li>
              <li><a href="#">Grupos</a></li>
              <li><a href="#">Sub-Grupos</a></li>
              <li><a href="#">Clientes</a></li>
              <li><a href="#">Transferências</a></li>
              <li><a href="#">Fluxo de Caixa</a></li>
              <li><a href="{{route('conta_corrente')}}">Conta Corrente</a></li>

            </li>

          </ul> 

    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contas A Pagar<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li class="dropdown-header">Relatórios</li>
              <li><a href="#">Data de Referência</a></li>
              <li><a href="#">Data de Pagamento</a></li>
              <li><a href="#">Data de Movimento</a></li>
              <li><a href="#">Data de Vencimento</a></li>
              <li><a href="#">Por Job</a></li>

              <li class="divider"></li>
              <li class="dropdown-header">Manutenção</li>
              <li><a href="#">Pagamentos</a></li>
              <li><a href="#">Baixa Por Banco</a></li>
              <li><a href="#">Baixa Por Documento</a></li>
              <li><a href="#">Baixa Por Período</a></li>

              <li class="divider"></li>
              <li class="dropdown-header">Outros</li>
              <li><a href="#">Grupos</a></li>
              <li><a href="#">Sub-Grupos</a></li>
              <li><a href="#">Clientes</a></li>
              <li><a href="#">Transferências</a></li>
              <li><a href="#">Fluxo de Caixa</a></li>
              <li><a href="{{route('conta_corrente')}}">Conta Corrente</a></li>
              <li><a href="#">Fornecedores</a></li>
              <li><a href="#">Vendedores</a></li>
              <li><a href="#">Alterar Data de Referência Por Lote</a></li>
              <li><a href="#">Voucher de Pagamento</a></li>
              <li><a href="#">Movimento de Caixa</a></li>
            </li>
    </ul>



    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
          <!-- /Alertas Bootstrap -->
        <div class="container">
                   @if(Session::has('success'))
            <div class="alert alert-success fade in" role="alert">
                   {{session('success')}}
            </div>
                   @endif 

                   @if(Session::has('error'))
             <div class="alert alert-danger fade in" role="alert">
                {{session('error')}}
            </div>
                @endif


<script type="text/javascript">
  //Fade Out Alertas
            $(document).ready(function () {
             
            window.setTimeout(function() {
                $(".alert").fadeTo(1000, 0).slideUp(200, function(){
                    $(this).remove(); 
                });
            }, 1500);
             
            });

</script>

@yield('content')

    </body>
</html>

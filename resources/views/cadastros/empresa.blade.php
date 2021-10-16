@extends('layouts.default')

@section('title', 'Dashboard V3')

@push('css')
	<link href="/assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Cadastros</a></li>
		<li class="breadcrumb-item active"><a href="javascript:;">Cadastrar Empresa</a></li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header mb-3">Cadastro de Empresas</h1>
	<!-- end page-header -->

    <div class="col-xl">
        <!-- begin panel -->
        <form action="/" method="POST">
        <div class="panel panel-inverse" data-sortable-id="form-stuff-10">
            <!-- begin panel-heading -->
            <div class="panel-heading ui-sortable-handle">
                <h4 class="panel-title">Dados Principais</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->
                <div class="panel-body" style="">
                    <fieldset>
                        <div class="row">

                            <legend class="m-b-15">Informações da Empresa</legend>
                            <div class="form-group col-md-2">
                                <label>CNPJ</label>
                                <input type="text" class="form-control" placeholder="Digite o CNPJ" name="CNPJ" id="cnpj">
                                <button type="button" onclick="getcnpj()" class="btn btn-sm btn-primary m-t-15" style="width: 100%">Preencher dados</button>
                            </div>
                            <div class="form-group col-md-5">
                                <label>Nome Fantasia</label>
                                <input type="text" class="form-control" placeholder="Nome Fantasia" name="nome_fantasia" id="nome_fantasia" disabled>
                                <button type="button" onclick="buscarSimilares()" class="btn btn-sm btn-info m-t-15" style="width: 100%">Verificar empresas similares</button>
                            </div>
                            <div class="form-group col-md-5">
                                <label>Razão Social</label>
                                <input type="text" class="form-control" placeholder="Razão Social" name="razao_social" id="razao_social" disabled>
                                <button type="button" onclick="buscarMF()" class="btn btn-sm btn-secondary m-t-15" style="width: 100%">Verificar Matriz e Filiais</button>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Inicio das Atividades</label>
                                <input type="text" class="form-control" placeholder="Data de inicio das atividades" name="data_inicio_atividade" id="data_inicio_atividade" disabled>
                            </div>
                            <div class="form-group col-md-2">
                                <label>CNAE Fiscal</label>
                                <input type="text" class="form-control" placeholder="CNAE Fiscal" name="cnae_fiscal" id="cnae_fiscal" disabled>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Descrição Matriz/Filial</label>
                                <input type="text" class="form-control" placeholder="Matriz ou Filial" name="descricao_matriz_filial" id="descricao_matriz_filial" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Endereço</label>
                                <input type="text" class="form-control" placeholder="Logradouro" name="endereco" id="endereco">
                            </div>
                        </div>
                    </fieldset>
                </div>

            </div>
            <!-- end panel-body -->
            <!-- begin panel-heading -->
            <div class="panel panel-inverse" data-sortable-id="form-stuff-10">
                <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title">Dados de Contato</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                </div>
                <!-- end panel-heading -->
                <!-- begin panel-body -->
                    <div class="panel-body" style="">
                        <fieldset>
                            <div class="row">
                                <legend class="m-b-15">Informações de Contato</legend>
                                <div class="form-group col-md-4">
                                    <label>Nome do contato</label>
                                    <input type="text" class="form-control socio" placeholder="Nome" name="nome_contato[]" id="nome_contato">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Email</label>
                                    <input type="email" class="form-control email" placeholder="email@exemplo.com" name="email[]">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Telefone Fixo</label>
                                    <input type="text" class="form-control tel_fixo" placeholder="(DD) XXXX-XXXX" name="tel_fixo[]">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Celular / WhatsApp</label>
                                    <input type="text" class="form-control tel_celular" placeholder="(DD) 9XXXX-XXXX" name="tel_celular[]">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Nome do contato</label>
                                    <input type="text" class="form-control socio" placeholder="Nome" name="nome_contato[]" id="nome_contato">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Email</label>
                                    <input type="email" class="form-control email" placeholder="email@exemplo.com" name="email[]">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Telefone Fixo</label>
                                    <input type="text" class="form-control tel_fixo" placeholder="(DD) XXXX-XXXX" name="tel_fixo[]">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Celular / WhatsApp</label>
                                    <input type="text" class="form-control tel_celular" placeholder="(DD) 9XXXX-XXXX" name="tel_celular[]">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Nome do contato</label>
                                    <input type="text" class="form-control socio" placeholder="Nome" name="nome_contato[]" id="nome_contato">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Email</label>
                                    <input type="email" class="form-control email" placeholder="email@exemplo.com" name="email[]">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Telefone Fixo</label>
                                    <input type="text" class="form-control tel_fixo" placeholder="(DD) XXXX-XXXX" name="tel_fixo[]">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Celular / WhatsApp</label>
                                    <input type="text" class="form-control tel_celular" placeholder="(DD) 9XXXX-XXXX" name="tel_celular[]">
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <!-- end panel-body -->
                </div>
                <button type="submit" class="btn btn-sm btn-primary m-r-5">Cadastrar</button>
                <button type="button" onclick="$('input').val('');" class="btn btn-sm btn-default">Limpar</button>
            </form>
        <!-- end panel -->
    </div>
	<!-- end row -->
@endsection


@push('scripts')
<script>
    function buscarSimilares(){
        window.open("http://cnpj.info/" + $('#nome_fantasia').val().replace(" ", "'"), '_blank')
    }

    function buscarMF(){
        window.open("http://cnpj.info/" + $('#razao_social').val().replaceAll(" ", "'"), '_blank')
    }

    function getcnpj(){
        $.get("https://brasilapi.com.br/api/cnpj/v1/" + $('#cnpj').val().replace(/\D/g, ""))
            .then(function(data) {
                    //DADOS DA EMPRESA
                    $('#nome_fantasia').val(data.nome_fantasia);
                    $('#razao_social').val(data.razao_social);
                    $('#data_inicio_atividade').val(data.data_inicio_atividade);
                    $('#cnae_fiscal').val(data.cnae_fiscal);
                    $('#descricao_matriz_filial').val(data.descricao_matriz_filial);
                    getLogradouro(data.cep, data.numero);
                    //DADOS DE CONTATO
                    $('.socio').val(data.qsa[0].nome_socio);
                    $('.tel_fixo').val(data.ddd_telefone_1);
            })
            .done(function(response) {
                console.log('Empresa encontrada!');
            })
            .fail(function(err) {
                $.ajax({
                type: 'GET',
                crossDomain: true,
                dataType: 'jsonp',
                url: 'https://www.receitaws.com.br/v1/cnpj/' + $('#cnpj').val().replace(/\D/g, ""),
                success: function(data){
                    //DADOS DA EMPRESA
                    $('#nome_fantasia').val(data.fantasia);
                    $('#razao_social').val(data.nome);
                    $('#data_inicio_atividade').val(data.abertura);
                    $('#cnae_fiscal').val(data.atividade_principal[0].code.replaceAll(/\D/g, ""));
                    $('#descricao_matriz_filial').val(data.tipo);
                    //ENDEREÇO
                    var cidadeUF = '. ' + data.municipio +  '-' + data.uf;
                    var rua = data.logradouro + ', ' + data.numero +'. ';
                    var bairro = data.bairro;
                    var endereco = rua + bairro + cidadeUF;
                    $('#endereco').val(endereco);
                    //DADOS DE CONTATO
                    $('.email').val(data.email);
                    $('.tel_fixo').val(data.telefone);
                }
                });
            });
    }

    function getLogradouro(cep, numero){
        $.get("https://brasilapi.com.br/api/cep/v2/" + cep, function(data, status){
            var cidadeUF = '. ' + data.city +  '-' + data.state;
            var rua = data.street + ', ' + numero +'. ';
            var bairro = data.neighborhood;
            var endereco = rua + bairro + cidadeUF;
            $('#endereco').val(endereco);
        });
    }
document.addEventListener("DOMContentLoaded", function(event) {
    $("#cnpj").mask("99.999.999/9999-99");
    $(".tel_fixo").mask("(99) 9999-9999");
    $(".tel_celular").mask("(99) 99999-9999");
  });
</script>
    <script src="/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
	<script src="/assets/plugins/d3/d3.min.js"></script>
	<script src="/assets/plugins/nvd3/build/nv.d3.js"></script>
	<script src="/assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
	<script src="/assets/plugins/moment/moment.js"></script>
@endpush

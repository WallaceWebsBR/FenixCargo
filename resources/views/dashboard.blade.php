@extends('layouts.default')

@section('title', 'Dashboard V3')

@push('css')
	<link href="/assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item active"><a href="javascript:;">Dashboard</a></li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header mb-3">INICIO</h1>
	<!-- end page-header -->
	<!-- begin row -->
    <div class="row">
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-teal">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
                <div class="stats-content">
                    <div class="stats-title">MEMBRO DESDE</div>
                    <div class="stats-number">{{(Auth::user()->created_at)->format('d/m/Y')}}</div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 100%;"></div>
                    </div>
                    <div class="stats-desc">Status: Ativo</div>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-blue">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-truck fa-fw"></i></div>
                <div class="stats-content">
                    <div class="stats-title">PRODUTOS ENVIADOS</div>
                    <div class="stats-number">1.820</div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 100%;"></div>
                    </div>
                    <div class="stats-desc">20 produtos a mais que no dia anterior</div>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-indigo">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
                <div class="stats-content">
                    <div class="stats-title">NOVOS PEDIDOS</div>
                    <div class="stats-number">38.900</div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 76.3%;"></div>
                    </div>
                    <div class="stats-desc">Aumento de pedidos em (76.3%)</div>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-dark">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
                <div class="stats-content">
                    <div class="stats-title">EMPRESAS CADASTRADAS</div>
                    <div class="stats-number">{{count($empresas)}}</div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 54.9%;"></div>
                    </div>
                    <div class="stats-desc">{{count($empresas)}} novas empresas cadastradas</div>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
    </div>
    <div class="col-xl">
        <div class="panel panel-inverse" data-sortable-id="form-stuff-10">
            <!-- begin panel-heading -->
            <div class="panel-heading ui-sortable-handle">
                <h4 class="panel-title">Relatório dos Pedidos</h4>
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
                        <div class="table-responsive">
                            <table class="table table-striped m-b-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>CNPJ</th>
                                        <th>Nome Fantasia</th>
                                        <th>Email</th>
                                        <th>Valor da fatura</th>
                                        <th>Situação</th>
                                        <th>Ações<th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>32.177.382/0001-12</td>
                                        <td>Nicky Almera</td>
                                        <td>nicky@hotmail.com</td>
                                        <td>293.22</td>
                                        <td>Pago</td>
                                        <th>
                                            <button class="btn btn-primary" disabled>Imprimir Fatura</button>
                                            <button class="btn btn-info" disabled>Enviar Fatura por Email</button>
                                            <button class="btn btn-danger">Excluir Fatura</button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>32.123.312/0001-22</td>
                                        <td>Edmund Wong</td>
                                        <td>edmund@yahoo.com</td>
                                        <td>41.27</td>
                                        <td>Pago</td>
                                        <th>
                                            <button class="btn btn-primary" disabled>Imprimir Fatura</button>
                                            <button class="btn btn-info" disabled>Enviar Fatura por Email</button>
                                            <button class="btn btn-danger">Excluir Fatura</button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>22.133.332/0001-44</td>
                                        <td>Harvinder Singh</td>
                                        <td>harvinder@gmail.com</td>
                                        <td>123.32</td>
                                        <td>Não Pago</td>
                                        <th>
                                            <button class="btn btn-primary">Imprimir Fatura</button>
                                            <button class="btn btn-info">Enviar Fatura por Email</button>
                                            <button class="btn btn-danger">Excluir Fatura</button>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                    </fieldset>
                </div>
        </div>
            <!-- end panel-body -->
    </div>
    <div class="col-xl">
        <div class="panel panel-inverse" data-sortable-id="form-stuff-10">
            <!-- begin panel-heading -->
            <div class="panel-heading ui-sortable-handle">
                <h4 class="panel-title">Empresas Cadastradas</h4>
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
                        <div class="table-responsive">
                            <table class="table table-striped m-b-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>CNPJ</th>
                                        <th>Nome Fantasia</th>
                                        <th>Endereço</th>
                                        <th>Email</th>
                                        <th>Contatos</th>
                                        <th>Açoes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($empresas))
                                    @foreach ($empresas as $empresa)
                                    <tr>
                                        <td>{{$empresa->id}}</td>
                                        <td>{{$empresa->cnpj}}</td>
                                        <td>{{$empresa->nome_fantasia}}</td>
                                        <td>{{$empresa->endereco}}</td>
                                        <td>{{$empresa->email ?? 'Sem dados'}}</td>
                                        <td>{{$empresa->tel_fixo ?? ''}} / {{$empresa->tel_celular}}</td>
                                        <td>
                                            <button type="button" onclick="location.href = '{{route('cadastro.empresa.edit', $empresa->id)}}'" class="btn btn-success"> Editar </button>
                                            <button type="button" onclick="location.href = '{{route('cadastro.empresa.destroy', $empresa->id)}}'" class="btn btn-danger"> Excluir </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                          </div>
                    </fieldset>
                </div>
        </div>
            <!-- end panel-body -->
    </div>
	<!-- end row -->
@endsection

@push('scripts')
	<script src="/assets/plugins/d3/d3.min.js"></script>
	<script src="/assets/plugins/nvd3/build/nv.d3.js"></script>
	<script src="/assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
	<script src="/assets/plugins/moment/moment.js"></script>
	<script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
@endpush

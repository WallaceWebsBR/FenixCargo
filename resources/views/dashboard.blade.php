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
                    <div class="stats-number">3.988</div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 54.9%;"></div>
                    </div>
                    <div class="stats-desc">15 novas empresas cadastradas</div>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-6 ui-sortable">
            <!-- begin panel -->

            <!-- end panel -->
        <div class="panel panel-inverse" data-sortable-id="index-3" style="">
                <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title">Entregas Agendadas</h4>
                </div>
                <div id="schedule-calendar" class="bootstrap-calendar"><div class="calendar" id="cal_gp7"><table class="table header"><tbody><tr></tr></tbody><td><i class="icon-arrow-left"></i></td><td colspan="5" class="year span6"><div class="visualmonthyear">October 2021</div></td><td><i class="icon-arrow-right"></i></td></table><table class="daysmonth table table"><tr class="week_days"><td class="first">S</td><td>M</td><td>T</td><td>W</td><td>T</td><td>F</td><td class="last">S</td></tr><tr><td class="invalid first"></td><td class="invalid"></td><td class="invalid"></td><td class="invalid"></td><td class="invalid"></td><td id="cal_gp7_1_10_2021"><a>1</a></td><td id="cal_gp7_2_10_2021" class="last event event_popover" style=""><a data-original-title="Popover Title" data-trigger="manual" class="manual_popover" rel="popover" data-content="Some contents here" style="background-color: rgb(0, 172, 172);">2</a></td></tr><tr><td id="cal_gp7_3_10_2021" class="first"><a>3</a></td><td id="cal_gp7_4_10_2021"><a>4</a></td><td id="cal_gp7_5_10_2021" class="event event_tooltip" style=""><a data-original-title="Tooltip with link" href="http://www.seantheme.com/" rel="tooltip" style="background-color: rgb(0, 0, 0);">5</a></td><td id="cal_gp7_6_10_2021"><a>6</a></td><td id="cal_gp7_7_10_2021"><a>7</a></td><td id="cal_gp7_8_10_2021"><a>8</a></td><td id="cal_gp7_9_10_2021" class="last"><a>9</a></td></tr><tr><td id="cal_gp7_10_10_2021" class="first"><a>10</a></td><td id="cal_gp7_11_10_2021"><a>11</a></td><td id="cal_gp7_12_10_2021"><a>12</a></td><td id="cal_gp7_13_10_2021"><a>13</a></td><td id="cal_gp7_14_10_2021"><a>14</a></td><td id="cal_gp7_15_10_2021"><a>15</a></td><td id="cal_gp7_16_10_2021" class="last"><a>16</a></td></tr><tr><td id="cal_gp7_17_10_2021" class="first"><a>17</a></td><td id="cal_gp7_18_10_2021" class="event event_popover" style=""><a data-original-title="Popover with HTML Content" data-trigger="manual" class="manual_popover" rel="popover" data-content="Some contents here <div class=&quot;text-right&quot;><a href=&quot;http://www.google.com&quot;>view more >>></a></div>" style="background-color: rgb(0, 0, 0);">18</a></td><td id="cal_gp7_19_10_2021"><a>19</a></td><td id="cal_gp7_20_10_2021"><a>20</a></td><td id="cal_gp7_21_10_2021"><a>21</a></td><td id="cal_gp7_22_10_2021"><a>22</a></td><td id="cal_gp7_23_10_2021" class="last"><a>23</a></td></tr><tr><td id="cal_gp7_24_10_2021" class="first"><a>24</a></td><td id="cal_gp7_25_10_2021"><a>25</a></td><td id="cal_gp7_26_10_2021"><a>26</a></td><td id="cal_gp7_27_10_2021"><a>27</a></td><td id="cal_gp7_28_10_2021" class="event event_tooltip" style=""><a data-original-title="Color Admin V1.3 Launched" href="http://www.seantheme.com/color-admin-v1.3" rel="tooltip" style="background-color: rgb(0, 0, 0);">28</a></td><td id="cal_gp7_29_10_2021"><a>29</a></td><td id="cal_gp7_30_10_2021" class="last"><a>30</a></td></tr><tr><td id="cal_gp7_31_10_2021" class="first"><a>31</a></td><td class="invalid"></td><td class="invalid"></td><td class="invalid"></td><td class="invalid"></td><td class="invalid"></td><td class="invalid last"></td></tr></table></div></div>
                <div class="list-group">
                    <a href="javascript:;" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center text-ellipsis">
                        Entrega no ACRE
                        <span class="badge bg-teal f-s-10">9:00 am</span>
                    </a>
                    <a href="javascript:;" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center text-ellipsis">
                        Entrega em Santa Catarina
                        <span class="badge bg-blue f-s-10">2:45 pm</span>
                    </a>
                </div>
            </div></div>
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

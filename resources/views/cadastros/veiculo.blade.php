@extends('layouts.default')

@section('title', 'Dashboard V3')

@push('css')

    <link href="../assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')
<div class="col-xl">
    <div class="panel panel-inverse" data-sortable-id="form-stuff-10">

        <div class="panel-heading ui-sortable-handle">
            <h4 class="panel-title">Cadastro de Veiculos</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            </div>
        </div>

        <form method="GET">
            <div class="panel-body row">
            <div class="col">
                <div class="form-group col-md-3">
                    <label>Nome Veiculo</label>
                    <input type="text" name="nome_veiculo" class="form-control" />
                </div>
                <div class="form-group col-md-3">
                    <label>Placa</label>
                    <input type="text" name="placa" class="form-control" />
                </div>
                <div class="form-group col-md-3">
                    <label>Tipo Veiculo</label>
                    <select name="tipo" class="form-control tags" multiple>
                    </select>
                </div>
                    <button type="button" class="btn btn-success ml-3 mt-5">Cadastrar</button>
                    <button type="button" class="btn btn-danger ml-3 mt-5">Cancelar</button>
            </div>
            <div class="col">
                <h1>Não Implementado</h1>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('assets/plugins/select2/dist/js/select2.min.js')}}"></script>
<script type="text/javascript">
    $('.tags').select2({
        tags: true
    });
</script>
@endsection


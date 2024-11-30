@extends('layouts.app')

@section('content')

    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

    <div class="container">
        <h2>Cadastrar Obra</h2>

        <!-- Exibe mensagens de sucesso ou erro -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('obras.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome da Obra</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div>
            
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="empresa_contratada">Empresa Contratada</label>
                    <input type="text" class="form-control" id="empresa_contratada" name="empresa_contratada" required>
                </div>

                <div class="col-md-6">
                    <label for="objeto_contrato">Objeto do Contrato</label>
                    <input type="text" class="form-control" id="objeto_contrato" name="objeto_contrato" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-3">
                    <label for="tempo_total_contrato">Tempo Total do Contrato</label>
                    <input type="text" class="form-control" id="tempo_total_contrato" name="tempo_total_contrato" required>
                </div>

                <div class="col-md-3">
                    <label for="data_prevista_inicio_obra">Data Prevista de Início</label>
                    <input type="date" class="form-control" id="data_prevista_inicio_obra" name="data_prevista_inicio_obra" required>
                </div>

                <div class="col-md-3">
                    <label for="data_real_inicio_obra">Data Real de Início</label>
                    <input type="date" class="form-control" id="data_real_inicio_obra" name="data_real_inicio_obra">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-3">
                    <label for="data_prevista_termino_obra">Data Prevista de Término</label>
                    <input type="date" class="form-control" id="data_prevista_termino_obra" name="data_prevista_termino_obra" required>
                </div>

                <div class="col-md-3">
                    <label for="data_real_termino_obra">Data Real de Término</label>
                    <input type="date" class="form-control" id="data_real_termino_obra" name="data_real_termino_obra">
                </div>
                
                <div class="form-group row">
                    <label for="descricao">Descrição</label>
                    <textarea id="descricao" name="descricao" rows="5" placeholder="Insira a descrição aqui"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar Obra</button>
        </form>
    </div>
@endsection

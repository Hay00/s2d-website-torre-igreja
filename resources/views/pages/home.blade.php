@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <a class="btn btn-primary" href="/configurar" role="button">
                            <span class="btn-label">
                                <i class="fas fa-clock"></i>
                            </span>
                            Configurar Relógio
                        </a>
                        <a class="btn btn-secondary" href="/agendamentos" role="button">
                            <span class="btn-label">
                                <i class="far fa-calendar-alt"></i>
                            </span>
                            Criar Agendamento
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center p-3">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @elseif(session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>
    <script>
        // Habilita input NTP
        $("#enableNTP").on("click", function() {
            let enabled = $("#enableNTP")[0].checked;
            $("#linkNTP").prop('disabled', !enabled);
        });
    </script>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8 m-3">
                <h3 style="text-align: center">Ajusar Horário da Torre</h3>
            </div>
            <div class="col-md-8">
                <form action="save-time" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="hourInput" class="col-md-4 col-form-label text-md-right">Hora</label>
                        <div class="col-md-3">
                            <input type="number" class="form-control" id="hourInput" name="hourInput" max="23" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="minutesInput" class="col-md-4 col-form-label text-md-right">Minutos</label>
                        <div class="col-md-3">
                            <input type="number" class="form-control" id="minutesInput" name="minutesInput" max="59"
                                required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="enableNTP" class="col-md-4 col-form-label text-md-right">Habilitar NTP</label>
                        <div class="form-check col-md-1" style="padding-left: 2rem;padding-top: 5px;">
                            <input class="form-check-input" type="checkbox" value="" id="enableNTP" name="enableNTP">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="linkNTP" class="col-md-4 col-form-label text-md-right">NTP Server</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="linkNTP" name="linkNTP" disabled required>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>

                </form>
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

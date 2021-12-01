@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8 m-3">
                <h3 style="text-align: center">Agendamento dos Sinos</h3>
            </div>
            <div class="col-md-8">
                {!! Form::open(['ulr' => '/agendamentos']) !!}
                @csrf
                <div class="form-group row @error('nome') has-error has-feedback @enderror">
                    {!! Form::label('nome', 'Nome', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                    <div class="col-md-4">{!! Form::text('nome', null, ['class' => 'form-control']) !!}</div>
                    @error('nome')
                        <small id="nomeHelp" class="form-text text-muted pt-2 pt-2">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group row @error('tipo') has-error has-feedback @enderror">
                    {!! Form::label('tipo', 'Tipo', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                    <div class="col-md-3">{!! Form::select('tipo', $selectList, '0', ['class' => 'form-control']) !!}</div>
                    @error('tipo')
                        <small id="tipoHelp" class="form-text text-muted pt-2">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group row @error('data') has-error has-feedback @enderror">
                    {!! Form::label('data', 'Data', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                    <div class="col-md-3">{!! Form::date('data', null, ['class' => 'form-control']) !!}</div>
                    @error('data')
                        <small id="dataHelp" class="form-text text-muted pt-2">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group row @error('hora') has-error has-feedback @enderror">
                    {!! Form::label('hora', 'Data', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                    <div class="col-md-3">{!! Form::time('hora', Carbon\Carbon::now()->format('H:i'), ['class' => 'form-control']) !!}</div>
                    @error('hora')
                        <small id="horaHelp" class="form-text text-muted pt-2">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        {{ Form::submit('Salvar', ['class' => 'btn btn-primary']) }}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

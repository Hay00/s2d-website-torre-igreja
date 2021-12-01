@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8 m-3">
                <h3 style="text-align: center">Ajustar configurações da torre</h3>
            </div>
            <div class="col-md-8">
                {!! Form::open(['ulr' => '/configurar']) !!}
                @csrf
                <div class="form-group row @error('link') has-error has-feedback @enderror">
                    {!! Form::label('link', 'NTP Server', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                    <div class="col-md-4">{!! Form::text('link', null, ['class' => 'form-control']) !!}</div>
                    @error('link')
                        <small id="link" class="form-text text-muted pt-2">{{ $message }}</small>
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

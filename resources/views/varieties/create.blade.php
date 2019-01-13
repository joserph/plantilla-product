@extends('layouts.template')


@section('content')
<h1>Crear Variedad</h1>
<hr>
<div class="col-md-6 col-md-offset-3">
    {!! Form::open(['route' => 'varieties.store', 'method' => 'POST']) !!}
        <div class="form-group">
            <label for="">Variedad</label>
            <input type="text" class="form-control" name="variety" id="" placeholder="Variedad de flor">
        </div>
        <div class="form-group">
            <label for="">Color</label>
            <input type="text" class="form-control" name="color" id="" placeholder="Color de flor">
        </div>
        <div class="form-group">
            <label for="">Color</label>
            {{ Form::select('type', ['rose' => 'Rosa', 'gypso' => 'Gypso'], null, ['placeholder' => 'Seleccione tipo', 'class' => 'form-control']) }}
        </div>
        <button type="submit" class="btn btn-default">Guardar</button>
    {!! Form::close() !!}
</div>

@endsection
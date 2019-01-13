@extends('layouts.template')


@section('content')
<h1>Variedades
    <a href="{{ route('varieties.create') }}" class="btn btn-primary pull-right"><i class="fas fa-plus-circle"></i></a>
</h1>
<hr>
<div class="table-responsive">
    <table class="table">
        <tr>
            <th class="text-center">Variedad</th>
            <th class="text-center">Color</th>
            <th class="text-center">Tipo</th>
            <th class="text-center">Accion</th>
        </tr>
        @foreach($varieties as $item)
        <tr>
            <td class="text-center">{{ $item->variety }}</td>
            <td class="text-center">{{ $item->color }}</td>
            <td class="text-center">{{ $item->type }}</td>
            <td class="text-center">
                <a href="{{ route('varieties.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                <a href="{{ route('varieties.destroy', $item->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection
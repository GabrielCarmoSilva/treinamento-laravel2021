@extends('admin.layouts.app')

@section('content')
    @component('admin.components.table')
        @slot('create', route('people.create'))
        @slot('titulo', 'Pessoas')
        @slot('head')
            <th>Nome</th>
            <th>Idade</th>
            <th>Profissão</th>
            <th></th>
        @endslot
        @slot('body')
            @foreach($people as $person)
                <tr>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->age }}</td>
                    <td>{{ $person->profession }}</td>
                    <td class="options">
                        <a href="{{ route('people.edit', $person->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('people.show', $person->id) }}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                        <form method="post" action="{{ route('people.destroy', $person->id) }}" class="form-delete">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection
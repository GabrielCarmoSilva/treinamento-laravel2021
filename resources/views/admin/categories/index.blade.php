@extends('admin.layouts.app')

@section('content')
    @component('admin.components.table')
        @slot('create', route('categories.create'))
        @slot('titulo', 'Categorias')
        @slot('head')
            <th>Nome</th>
            <th></th>
        @endslot
        @slot('body')
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td class="options">
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                        <form method="post" action="{{ route('categories.destroy', $category->id) }}" class="form-delete">
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
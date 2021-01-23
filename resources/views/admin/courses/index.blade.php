@extends('admin.layouts.app')

@section('content')
    @component('admin.components.table')
        @slot('create', route('courses.create'))
        @slot('titulo', 'Cursos')
        @slot('head')
            <th>Nome</th>
            <th>Horas</th>
            <th>Categoria</th>
            <th></th>
        @endslot
        @slot('body')
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->hours }}</td>
                    <td>{{ $course->category->name }}</td>
                    <td class="options">
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('courses.show', $course->id) }}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                        <form method="post" action="{{ route('courses.destroy', $course->id) }}" class="form-delete">
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
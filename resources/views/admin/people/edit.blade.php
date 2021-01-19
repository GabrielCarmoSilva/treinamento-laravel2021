@extends('admin.layouts.app')

@section('content')
    @component('admin.components.edit')
        @slot('title', 'Editar pessoa ' . $person->name)
        @slot('url', route('people.update', $person->id))
        @slot('form')
            @include('admin.people.form')
        @endslot
    @endcomponent
@endsection
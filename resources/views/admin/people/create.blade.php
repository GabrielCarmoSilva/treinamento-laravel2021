@extends('admin.layouts.app')

@section('content')
    @component('admin.components.create')
        @slot('title', 'Criar pessoa')
        @slot('url', route('people.store'))
        @slot('form')
            @include('admin.people.form')
        @endslot
    @endcomponent
@endsection
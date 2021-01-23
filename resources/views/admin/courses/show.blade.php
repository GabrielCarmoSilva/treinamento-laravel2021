@extends('admin.layouts.app')

@section('content')
    @component('admin.components.show')
        @slot('title', 'Mostrar curso ' . $course->name)
        @slot('url', route('courses.store'))
        @slot('form')
            @include('admin.courses.form')
        @endslot
    @endcomponent
@endsection

@push('scripts')
    <script>
        $('.form-control').attr('disabled', 'true');
    </script>
@endpush
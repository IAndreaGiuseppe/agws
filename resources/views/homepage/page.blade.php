@extends('agws::layout')

@section('body')
    @include('agws::homepage.menu')

    @include('agws::homepage.content')

    @include('agws::homepage.skills')

@endsection

@push('scripts')
    <script src="{{ asset('vendor/agws/toggler.js') }}" defer></script>
@endpush

@push('metadata')
    @include('metadata::metadata')
@endpush

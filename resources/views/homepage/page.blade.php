@extends('agws::layout')

@section('body')
    @include('agws::homepage.menu')

    @include('agws::homepage.content')

    @include('agws::homepage.skills')

@endsection

@push('scripts')
        <script src="{{ asset(mix('toggler.js', 'vendor/agws')) }}" defer></script>
@endpush

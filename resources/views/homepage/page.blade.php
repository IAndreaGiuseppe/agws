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
    @include('metadata::metadata', [
        'description' => "Aws, Javascript, Laravel, Tailwind, Composer. I'm the interstellar full-stack web developer. Consultant, teacher and cat lover."
    ])
@endpush

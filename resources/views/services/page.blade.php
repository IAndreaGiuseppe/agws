@extends('agws::layout')

@section('body')
    @include('agws::header')

    @include('agws::services.content')

@endsection

@push('metadata')
    @include('metadata::metadata', [
        'description' => 'I servizi di consulenza, hosting e sviluppo che offro per le aziende.'
    ])
@endpush

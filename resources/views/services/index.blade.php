@extends('agws::layout')

@section('body')
    @include('agws::header')

    @include('agws::services.courses')

    @include('agws::services.content')

@endsection

@push('metadata')
    @include('metadata::metadata', [
        'title' => 'Andrea Giuseppe | Servizi di consulenza e sviluppo web-oriented',
        'description' => 'I servizi di consulenza, hosting e sviluppo applicazioni in Laravel che offro per le aziende.',
    ])
@endpush

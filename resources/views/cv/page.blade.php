@extends('agws::layout')

@section('body')
    @include('agws::header')

    @include('agws::cv.summary')

    @include('agws::cv.skills')

    @include('agws::cv.jobs')

    @include('agws::cv.consult')

@endsection

@push('metadata')
    @include('metadata::metadata', [
        'title' => 'Andrea Giuseppe | Curriculum Vitae',
        'description' => 'Il curriculum vitae aggiornato dello sviluppatore web Andrea Giuseppe.',
    ])
@endpush

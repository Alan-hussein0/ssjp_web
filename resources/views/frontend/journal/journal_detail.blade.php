@extends('layouts.app')  

@section('content')
    <main id="main">
    @include('frontend.journal.services')
    @include('frontend.journal.agent')
    @include('frontend.journal.instruction')
    </main>
@endsection
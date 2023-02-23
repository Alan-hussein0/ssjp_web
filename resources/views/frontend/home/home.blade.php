@extends('layouts.app')

@section('content')
    
    @include('frontend.home.intro_carousel')
    
    <main id="main">

        @include('frontend.home.intro_section')

        @include('frontend.home.latest_properties_section')
        
        @include('frontend.home.agents_section')
        
        @include('frontend.home.testimonials_section')

    </main>
        
@endsection
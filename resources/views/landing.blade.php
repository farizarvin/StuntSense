@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    @include('components.landing.hero')

    {{-- About Stunting Section --}}
    @include('components.landing.about')

    {{-- How It Works Section --}}
    @include('components.landing.how-it-works')

    {{-- Features Section --}}
    @include('components.landing.features')

    {{-- Stats Section --}}
    @include('components.landing.stats')

    {{-- Testimonials Section --}}
    @include('components.landing.testimonials')

    {{-- CTA Section --}}
    @include('components.landing.cta')
@endsection
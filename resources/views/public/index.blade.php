@extends('layouts.main')

@section('main')
    {{-- hero section --}}
    @include('public.components.hero.hero')
    {{-- end hero section --}}

    {{-- features section --}}
    @include('public.components.features-section.features')
    {{-- end features section --}}

    {{-- about section --}}
    @include('public.components.about')
    {{-- end about section --}}

    {{-- pricing section --}}
    @include('public.components.pricing')
    {{-- end pricing section --}}

    {{-- faq section --}}
    @include('public.components.faq')
    {{-- end faq section --}}


    {{-- testimonilas section --}}
    @include('public.components.testimonial.testimonial')
    {{-- end testimonilas section --}}

    {{-- team section --}}
    @include('public.components.teams.team')
    {{-- end team section --}}

    {{-- contact section --}}
    @include('public.components.contact.contact')
    {{-- end contact section --}}
@endsection

@extends('comps.organisms.x1commonLayout')
@section('title', 'Sayed Maheen | Full Stack Developer')
{{-- dark header --}}
{{--  header included with hero --}}
@section('x1main')
    {{-- <main class="x1main"> --}}
    {{-- hero dark --}}
    {{-- @include('comps.molecules.secondhome.hero') --}}
    {{-- light --}}
    {{-- @include('comps.molecules.secondhome.feature1') --}}
    {{-- light then dark --}}
    {{-- @include('comps.molecules.secondhome.feature2') --}}
    {{-- light --}}
    {{-- @include('comps.molecules.secondhome.program') --}}
    {{-- dark --}}
    {{-- @include('comps.molecules.secondhome.gallery') --}}
    {{-- light --}}
    {{-- @include('comps.molecules.secondhome.integration') --}}
    @include('comps.molecules.x1home.x1hero')
    @include('comps.molecules.x1home.x1about')
    @include('comps.molecules.x1home.x1services')
    @include('comps.molecules.x1home.x1portfolio')
    @include('comps.molecules.x1home.x1resume')
    @include('comps.molecules.x1home.x1contact')


    {{-- </main> --}}
@endsection
{{--  footer included  --}}

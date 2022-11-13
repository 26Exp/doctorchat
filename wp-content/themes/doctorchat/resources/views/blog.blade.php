{{--
  Template Name: Blog Template
--}}

@extends('layouts.app')

@section('content')
  <!-- Separator Start -->
  <div class="flex items-center justify-center px-2 py-14 md:py-28">
    <picture>
      <source media="(min-width: 768px)" srcset="@asset('svgs/section-separator.svg')" />
      <img src="@asset('svgs/section-separator-mobile.svg')" alt="DoctorChat Logo" />
    </picture>
  </div>
  <!-- Separator End -->
@endsection

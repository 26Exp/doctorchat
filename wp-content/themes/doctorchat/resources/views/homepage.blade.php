{{-- 
  Template Name: Home Page 
--}}

@extends('layouts.app')

@section('content')
  <section class="relative h-screen bg-[url('../images/hero-section-bg.jpg')] bg-no-repeat bg-cover bg-[center_left_-22rem]">
    <div class="absolute pointer-events-none top-0 left-0 w-full h-full bg-black/30 z-0"></div>

    <x-container>
      <div class="h-full w-full flex items-start justify-center flex-col">
        <h1 class="text-6xl font-bold uppercase text-white mb-2">Clinica virtuală</h1>
        <h2 class="text-4xl font-bold text-dc-mint">Consultații online de la tine de acasa</h2>
        <ul class="mt-8 text-white list-disc pl-4">
          <li>Specialiști medicali calificați din Republica Moldova la un click distanță.</li>
          <li>Doctori cu experiență clinică, științifică și didactică.</li>
          <li>Oferă asistență online pentru tratamente de rutină și sfaturi medicale.</li>
        </ul>
      </div>
      </x-container>
  </section>
@endsection
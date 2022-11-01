{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')
<h1>{{ get_field('h1_intro') }}</h1>
@foreach(get_field('strong_points') as $point)
  <h2>{{ $point }}</h2>
@endforeach

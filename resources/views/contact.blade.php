{{--
  Template Name: Contact Template
--}}

@extends('layouts.app')

@section('content')
  @include('partials.header')

  <section class="Section -center">
    @while(have_posts()) @php(the_post())
      @include('partials.page-header')
      @include('partials.content-page')
    @endwhile
  </section>

  @include('partials.getstart-modal')
@endsection

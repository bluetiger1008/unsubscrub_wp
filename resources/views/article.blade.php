{{--
  Template Name: Article Template
--}}

@extends('layouts.app')

@section('content')
  <div class="header">
    <a href="{{ home_url('/') }}"><img class="logo" src="@asset('images/logo.svg')"></a>
    <button class="btn button-primary-bg">Get Started</button>
  </div>
  
  <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
  @if ($backgroundImg[0])
    <section class="article-image" style="background-image: url('{{ $backgroundImg[0] }}')">
  @else
    <section class="article-image" style="background-image: url('@asset('images/bg-placeholder.png')')">    
  @endif
  </section>
  
  <section class="Section article-content">
    @while(have_posts()) @php(the_post())
      @include('partials.page-header')
      @include('partials.content-page')
    @endwhile
  </section>
@endsection

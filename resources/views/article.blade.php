{{--
  Template Name: Article Template
--}}

@extends('layouts.app')

@section('content')
  <div class="header">
    <img class="logo" src="@asset('images/logo.svg')">
    <button class="btn button-primary-bg">Get Started</button>
  </div>
  
  <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
  <section class="article-image" style="background: url('<?php echo $backgroundImg[0]; ?>')">
  </section>
  
  <section class="Section article-content">
    @while(have_posts()) @php(the_post())
      @include('partials.page-header')
      @include('partials.content-page')
    @endwhile
  </section>
@endsection

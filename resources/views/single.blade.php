@extends('layouts.app')

@section('content')
  @include('partials.header')

  <section class="Section">
    @while(have_posts()) @php(the_post())
      @include('partials.content-single-'.get_post_type())
    @endwhile
  </section>
  
  @include('partials.getstart-modal')
@endsection

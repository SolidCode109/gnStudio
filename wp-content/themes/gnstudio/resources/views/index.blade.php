@extends('layouts.app')

@section('content')
<div class="container mx-auto py-4">
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  @while(have_posts()) @php(the_post())
  <div class="my-4 bg-[#242424] rounded-lg px-6 py-8 ring shadow-xl ring-gray-900/5 text-white">

    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  </div>
  @endwhile


  {!! get_the_posts_navigation() !!}
</div>
@endsection

{{-- @section('sidebar')
  @include('sections.sidebar')
@endsection --}}

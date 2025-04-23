@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  <article @php(post_class())>
    <div class="container mx-auto px-4 py-4">
    <div class="my-4 bg-[#242424] hover:bg-[#000000] transition duration-300 ease-in-out rounded-lg px-6 py-8 ring shadow-xl ring-gray-900/5 text-white">

      <div class="flex items-center gap-x-4 text-xs">
        <p class="text-white">Title: {{ get_the_title() }}</p>
        <p class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-[#242424] hover:bg-gray-100">Author: {{ get_the_author()}}</p>
        <p class="text-white">Date: {{ get_the_date() }}</p>
      </div>

    <div class="my-3 text-md font-semibold text-white">
      <p>Content: {!! get_the_content() !!}</p>
    </div>

    @if (view()->exists('components.offer'))
        <x-offer />
    @else
        <p class="text-red-500">Komponent "Oferta" nie jest dostępny</p>
    @endif
  </div>
  </article>
  @endwhile
@endsection

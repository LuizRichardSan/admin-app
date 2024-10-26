@extends('components.layout')

@section('content')

<x-nav-bar />
<div class="container mx-auto  mt-20 bg-white">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Faça um pedido</h1>
    </div>
    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray- py-6 sm:py-12">
        <div class="mx-auto max-w-screen-xl px-4 w-full">
          <div class="grid w-full sm:grid-cols-2 xl:grid-cols-4 gap-6">
            @foreach ($categories as $category)
            <div class="relative flex flex-col shadow-md rounded-xl overflow-hidden hover:shadow-lg hover:-translate-y-1 transition-all duration-300 max-w-sm">
              <a href="" class="hover:text-orange-600 absolute z-30 top-2 right-0 mt-2 mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                </svg>
              </a>
              <a href="" class="z-20 absolute h-full w-full top-0 left-0 ">&nbsp;</a>
              <div class="h-auto overflow-hidden">
                <div class="h-44 overflow-hidden relative">
                    @if ($category->cover_image)
                        <img src="{{ asset('storage/' . $category->cover_image) }}" alt="Capa da categoria">
                    @else
                        <img src="https://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cindra/imagens/sem.jpg.gif" alt="Capa da categoria">
                    @endif
                </div>
              </div>
              <div class="bg-white py-4 px-3">
                <h3 class="text-xs mb-2 font-medium">{{ $category->name }}</h3>
                <div class="flex items-center gap-2">
                    @foreach($category->products as $product)
                  <p class="text-xs text-gray-400 ">
                    {{ $product->name }}
                  </p>
                  @endforeach
                <div class="relative z-40 flex items-center gap-2">
                    <p class="text-xs text-gray-800 cursor-pointer">{{ $category->price }}</p>
                  <a class="text-orange-600 hover:text-blue-500" href="">                  </a>
                </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
    </div>
</div>
@endsection

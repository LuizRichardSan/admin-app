@extends('components.layout')

@section('content')

<x-nav-bar />

<div class="container mx-auto  mt-20 bg-white">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Categorias</h1>
        @error('error')
                    <div class="py-0.5"><p class=" text-red-500  text-center">{{$message}}</p></div>
        @enderror

        <x-button title="Adicionar nova categoria" id="open-sidebar"/>
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
                    <button class="text-blue-500 hover:underline edit-category"
                    data-category-id="{{ $category->id }}"
                    data-category-name="{{ $category->name }}"
                    data-category-products="{{ $category->products->toJson() }}"
                    data-category-price="{{ $category->price }}"
                    data-category-image="{{ $category->cover_image }}">
                Editar
            </button>
                  <a class="text-orange-600 hover:text-blue-500" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                  </svg>
                  </a>
                </div>
                </div>
              </div>
            </div>
            @endforeach


          </div>
        </div>
      </div>
</div>
<!-- Overlay -->
<div id="overlay" class="fixed inset-0 bg-black opacity-50 hidden z-40"></div>


<!-- Sidebar -->
<div id="sidebar"
    class="fixed right-0 top-0 w-0 h-full bg-white shadow-lg overflow-hidden transition-all duration-300 z-50">
    <div class="p-4">
        <div class="flex justify-between items-center mb-10">
            <h2 class="text-xl font-bold mb-4">Adicionar nova categoria</h2>
            <button id="close-sidebar"
                class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 w-10 h-10">X</button>
        </div>
        <form id="product-form" action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="form-method" name="_method" value="POST"> <!-- Campo oculto para simular PUT -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nome</label>
                <input type="text" name="name" id="name" required class="w-full p-2 border rounded-lg bg-white">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Selecionar Produtos</label>
                <div class="max-h-20 overflow-y-auto border p-2 rounded-lg"> <!-- Div com scroll -->
                    @foreach($products as $product)
                        <div class="flex items-center mb-2">
                            <input type="checkbox" name="products[]" value="{{ $product->id }}" id="product-{{ $product->id }}" class="mr-2">
                            <label for="product-{{ $product->id }}">{{ $product->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700">Preço</label>
                <input type="text" name="price" id="price" required class="w-full p-2 border rounded-lg bg-white">
            </div>

            <div class="mb-4">
                <label for="cover_image" class="block text-gray-700">Foto do produto</label>
    <input type="file" name="cover_image" id="cover_image" class="w-full p-2 border rounded-lg bg-white">

    <!-- Campo oculto para armazenar a imagem atual -->
    <input type="hidden" name="current_cover_image" id="current-cover-image-input">

    <!-- Exibir imagem atual -->
    <div id="current-image" class="mt-2">
        <img src="" alt="Capa da categoria" class="w-32 h-32 object-cover" id="current-cover-image">
    </div>
            </div>
            <x-button title="Adicionar"/>
        </form>

    </div>

@endsection

@section('scripts')
    @vite('resources/js/category.js')
@endsection



@extends('components.layout')
@section('content')


<navbar-component></navbar-component>

<div class="min-h-screen bg-gradient-to-b from-[#041530] via-[#062a4d] to-[#084061]">
    <!-- Primeira seção com 70% da tela -->
<div 
    class="w-full h-[70vh] bg-cover bg-center"
    style="background-image: url('{{ asset('img/bg-inicial.png') }}');">
    <!-- Conteúdo Principal -->
    <div class="container mx-auto px-4 py-8 text-center">
        <h1 class="text-6xl font-bold text-white">Bem-vindo ao Catálogo</h1>
        <p class="mt-4 text-gray-200">Conheça um pouco mais sobre nossos serviços!</p>
    </div>
</div>

<!-- Segunda seção com 30% da tela -->
<div class="w-full h-[30vh] bg-gray-200 flex justify-center items-center">
    <div class="container mx-auto px-4 py-2 text-center">
        <p class="text-gray-800 mb-4 text-5xl font-bold">Adicione uma nova categoria</p>
        
        <!-- Formulário de Adicionar Categoria -->
        <div class="flex justify-center items-center space-x-2">
            <!-- Input para categoria -->
            <input type="text" id="categoria" placeholder="Nova Categoria" 
                   class="p-2 rounded-l-lg border border-gray-300 w-72 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            
            <!-- Ícone de Adicionar -->
            <button class="px-10 py-2 bg-blue-800 text-white rounded-r-lg hover:bg-blue-900 focus:outline-none">
                <i class="fas fa-plus"></i> <!-- Ícone de adicionar -->
            </button>
        </div>        
    </div>
</div>

<!-- Terceira seção com 100% da tela -->
<div class="container my-12 mx-auto px-4 md:px-12 ">

     <!-- Título centralizado -->
     <div class="text-center mb-8">
        <h2 class="text-5xl font-bold text-white inline-flex items-center">
            Lanches
            <button class="ml-2 text-blue-500 hover:text-blue-700">
                
            </button>
        </h2>
    </div>
    <div class="flex flex-wrap -mx-1 lg:-mx-4">

        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg bg-white cursor-pointer">

                <!-- Imagem do Produto -->
                <a href="#">
                    <img alt="Hambúrguer Suculento" class="block h-auto w-full" src="https://via.placeholder.com/600x400?text=Hamburguer">
                </a>
            
                <!-- Detalhes do Produto -->
                <header class="flex flex-col justify-between leading-tight p-4">
                    <!-- Nome do Produto -->
                    <h1 class="text-xl font-bold text-gray-800">
                        Hambúrguer Suculento
                    </h1>
                    <!-- Ingredientes -->
                    <p class="mt-2 text-gray-700 text-sm">
                        Pão artesanal, carne 100% bovina, queijo cheddar, alface, tomate, molho especial.
                    </p>
                </header>
            
                <!-- Preço e Botão -->
                <footer class="flex items-center justify-between leading-none p-4">
                    <!-- Preço -->
                    <span class="text-xl font-semibold text-blue-600">
                        R$ 24,90
                    </span>
                    <!-- Botão para Comprar -->
                    <a 
                        href="#" 
                        class="bg-blue-800 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-900 transition">
                        Comprar
                    </a>
                </footer>
            
            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg bg-white cursor-pointer">

                <!-- Imagem do Produto -->
                <a href="#">
                    <img alt="Hambúrguer Suculento" class="block h-auto w-full" src="https://via.placeholder.com/600x400?text=Hamburguer">
                </a>
            
                <!-- Detalhes do Produto -->
                <header class="flex flex-col justify-between leading-tight p-4">
                    <!-- Nome do Produto -->
                    <h1 class="text-xl font-bold text-gray-800">
                        Hambúrguer Suculento
                    </h1>
                    <!-- Ingredientes -->
                    <p class="mt-2 text-gray-700 text-sm">
                        Pão artesanal, carne 100% bovina, queijo cheddar, alface, tomate, molho especial.
                    </p>
                </header>
            
                <!-- Preço e Botão -->
                <footer class="flex items-center justify-between leading-none p-4">
                    <!-- Preço -->
                    <span class="text-xl font-semibold text-blue-600">
                        R$ 24,90
                    </span>
                    <!-- Botão para Comprar -->
                    <a 
                        href="#" 
                        class="bg-blue-800 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-900 transition">
                        Comprar
                    </a>
                </footer>
            
            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg bg-white cursor-pointer">

                <!-- Imagem do Produto -->
                <a href="#">
                    <img alt="Hambúrguer Suculento" class="block h-auto w-full" src="https://via.placeholder.com/600x400?text=Hamburguer">
                </a>
            
                <!-- Detalhes do Produto -->
                <header class="flex flex-col justify-between leading-tight p-4">
                    <!-- Nome do Produto -->
                    <h1 class="text-xl font-bold text-gray-800">
                        Hambúrguer Suculento
                    </h1>
                    <!-- Ingredientes -->
                    <p class="mt-2 text-gray-700 text-sm">
                        Pão artesanal, carne 100% bovina, queijo cheddar, alface, tomate, molho especial.
                    </p>
                </header>
            
                <!-- Preço e Botão -->
                <footer class="flex items-center justify-between leading-none p-4">
                    <!-- Preço -->
                    <span class="text-xl font-semibold text-blue-600">
                        R$ 24,90
                    </span>
                    <!-- Botão para Comprar -->
                    <a 
                        href="#" 
                        class="bg-blue-800 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-900 transition">
                        Comprar
                    </a>
                </footer>
            
            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg bg-white cursor-pointer">

                <!-- Imagem do Produto -->
                <a href="#">
                    <img alt="Hambúrguer Suculento" class="block h-auto w-full" src="https://via.placeholder.com/600x400?text=Hamburguer">
                </a>
            
                <!-- Detalhes do Produto -->
                <header class="flex flex-col justify-between leading-tight p-4">
                    <!-- Nome do Produto -->
                    <h1 class="text-xl font-bold text-gray-800">
                        Hambúrguer Suculento
                    </h1>
                    <!-- Ingredientes -->
                    <p class="mt-2 text-gray-700 text-sm">
                        Pão artesanal, carne 100% bovina, queijo cheddar, alface, tomate, molho especial.
                    </p>
                </header>
            
                <!-- Preço e Botão -->
                <footer class="flex items-center justify-between leading-none p-4">
                    <!-- Preço -->
                    <span class="text-xl font-semibold text-blue-600">
                        R$ 24,90
                    </span>
                    <!-- Botão para Comprar -->
                    <a 
                        href="#" 
                        class="bg-blue-800 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-900 transition">
                        Comprar
                    </a>
                </footer>
            
            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg bg-white cursor-pointer">

                <!-- Imagem do Produto -->
                <a href="#">
                    <img alt="Hambúrguer Suculento" class="block h-auto w-full" src="https://via.placeholder.com/600x400?text=Hamburguer">
                </a>
            
                <!-- Detalhes do Produto -->
                <header class="flex flex-col justify-between leading-tight p-4">
                    <!-- Nome do Produto -->
                    <h1 class="text-xl font-bold text-gray-800">
                        Hambúrguer Suculento
                    </h1>
                    <!-- Ingredientes -->
                    <p class="mt-2 text-gray-700 text-sm">
                        Pão artesanal, carne 100% bovina, queijo cheddar, alface, tomate, molho especial.
                    </p>
                </header>
            
                <!-- Preço e Botão -->
                <footer class="flex items-center justify-between leading-none p-4">
                    <!-- Preço -->
                    <span class="text-xl font-semibold text-blue-600">
                        R$ 24,90
                    </span>
                    <!-- Botão para Comprar -->
                    <a 
                        href="#" 
                        class="bg-blue-800 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-900 transition">
                        Comprar
                    </a>
                </footer>
            
            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg bg-white cursor-pointer">

                <!-- Imagem do Produto -->
                <a href="#">
                    <img alt="Hambúrguer Suculento" class="block h-auto w-full" src="https://via.placeholder.com/600x400?text=Hamburguer">
                </a>
            
                <!-- Detalhes do Produto -->
                <header class="flex flex-col justify-between leading-tight p-4">
                    <!-- Nome do Produto -->
                    <h1 class="text-xl font-bold text-gray-800">
                        Hambúrguer Suculento
                    </h1>
                    <!-- Ingredientes -->
                    <p class="mt-2 text-gray-700 text-sm">
                        Pão artesanal, carne 100% bovina, queijo cheddar, alface, tomate, molho especial.
                    </p>
                </header>
            
                <!-- Preço e Botão -->
                <footer class="flex items-center justify-between leading-none p-4">
                    <!-- Preço -->
                    <span class="text-xl font-semibold text-blue-600">
                        R$ 24,90
                    </span>
                    <!-- Botão para Comprar -->
                    <a 
                        href="#" 
                        class="bg-blue-800 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-900 transition">
                        Comprar
                    </a>
                </footer>
            
            </article>
        </div>
        <!-- END Column -->

        <div class="flex-grow flex justify-center items-center pb-5">
            <button 
                class="flex items-center px-6 py-3 bg-white text-blue-800 text-xl font-bold rounded-lg shadow-lg hover:bg-gray-300 focus:outline-none focus:ring-4 focus:ring-blue-300">
                <i class="fas fa-plus mr-2"></i> <!-- Ícone de adicionar -->
                Adicionar Produto
            </button>
        </div>

    </div>
</div>
</div>

@endsection




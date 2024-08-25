@extends('components.layout')

@section('content')
<div class="container mx-auto mt-4">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Produtos</h1>
        <button id="open-sidebar" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
            Adicionar novo produto
        </button>
    </div>

    <div class="mb-4">
        <input type="text" placeholder="Buscar..." class="w-full p-2 border rounded-lg">
    </div>

    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead>
            <tr>
                <th class="py-2 px-4 bg-gray-100">Ordem</th>
                <th class="py-2 px-4 bg-gray-100">Nome</th>
                <th class="py-2 px-4 bg-gray-100">Quantidade</th>
                <th class="py-2 px-4 bg-gray-100">Preço</th>
                <th class="py-2 px-4 bg-gray-100">Ações</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aqui os produtos serão listados -->

            <tr>
                <td class="border px-4 py-2"></td>
                <td class="border px-4 py-2"></td>
                <td class="border px-4 py-2"></td>
                <td class="border px-4 py-2"></td>
                <td class="border px-4 py-2">
                    <button class="bg-green-500 text-white px-2 py-1 rounded-lg">Editar</button>
                </td>
            </tr>

        </tbody>
    </table>
</div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black opacity-50 hidden z-40"></div>


<!-- Sidebar -->
<div id="sidebar" class="fixed right-0 top-0 w-0 h-full bg-white shadow-lg overflow-hidden transition-all duration-300 z-50">
    <div class="p-4">
        <div class="flex justify-between items-center mb-10">
            <h2 class="text-xl font-bold mb-4">Adicionar novo produto</h2>
            <button id="close-sidebar" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 w-10 h-10">X</button>
        </div>
        <form action="" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nome</label>
                <input type="text" name="name" id="name" required class="w-full p-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="quantity" class="block text-gray-700">Quantidade</label>
                <input type="number" name="quantity" id="quantity" required class="w-full p-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700">Preço</label>
                <input type="text" name="price" id="price" required class="w-full p-2 border rounded-lg">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                Criar
            </button>
        </form>
    </div>
</div>

@endsection

@section('scripts')
@vite('resources/js/products.js')
@endsection





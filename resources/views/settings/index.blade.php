@extends('components.layout')

@section('content')
<x-nav-bar />

<div class="bg-white p-6 mt-20">
    <div class="max-w-4xl mx-auto bg-white p-8 shadow-lg rounded-lg">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <h1 class="text-3xl font-bold mb-8">Configurações do Sistema</h1>

        <form action="{{ route('settings.update') }}" method="POST">
            @csrf
            @method('PUT') <!-- Adicione este campo para alterar o método para PUT -->


            <div class="mb-6">
                <label for="company_name" class="block text-gray-700">Nome da Empresa</label>
                <input type="text" name="company_name" id="company_name" value="{{ $settings->company_name ?? '' }}" class="w-full p-2 border rounded-lg">

                @error('logo')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Configuração da Cor Principal -->
            <div class="mb-4">
                <label for="primary_color" class="block text-gray-700">Cor Principal</label>
                <select name="primary_color" id="primary_color" class="w-full p-2 border rounded-lg">
                    <option value="red-500" {{ $settings->primary_color === 'red-500' ? 'selected' : '' }}>Vermelho</option>
                    <option value="gray-900" {{ $settings->primary_color === 'gray-900' ? 'selected' : '' }}>Preto</option>
                    <option value="yellow-400" {{ $settings->primary_color === 'yellow-400' ? 'selected' : '' }}>Amarelo</option>
                    <option value="pink-600" {{ $settings->primary_color === 'pink-600' ? 'selected' : '' }}>Rosa</option>
                </select>
            </div>
            @error('primary_color')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror

            <!-- Configuração do Tipo de Negócio -->
            <div class="mb-6">
                <label for="type" class="block text-gray-700 font-semibold mb-2">Tipo de Negócio</label>
                <select name="type" id="type" class="w-full p-2 border border-gray-300 rounded-lg">
                    <option value="produto" {{ old('type', $settings->type) === 'produto' ? 'selected' : '' }}>Produto</option>
                    <option value="serviço" {{ old('type', $settings->type) === 'serviço' ? 'selected' : '' }}>Serviço</option>
                        </select>
                @error('type')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <x-button title="Salvar Configurações"/>
        </form>
    </div>
</div>


@endsection

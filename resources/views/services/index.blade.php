@extends('components.layout')


@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <x-nav-bar />


    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-center">Cadastro de Serviços</h1>

        <form action="{{ route('services.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Selecione os serviços:</label>

                <div class="space-y-2">
                    <div class="flex items-center">
                        <input id="corte-social" type="checkbox" name="services[]" value="Corte Social" class="form-checkbox h-5 w-5 text-blue-600">
                        <label for="corte-social" class="ml-2 text-gray-700">Corte Social - R$ 20,00</label>
                    </div>
                    <div class="flex items-center">
                        <input id="barba" type="checkbox" name="services[]" value="Barba" class="form-checkbox h-5 w-5 text-blue-600">
                        <label for="barba" class="ml-2 text-gray-700">Barba - R$ 15,00</label>
                    </div>
                    <div class="flex items-center">
                        <input id="sobrancelha" type="checkbox" name="services[]" value="Sobrancelha" class="form-checkbox h-5 w-5 text-blue-600">
                        <label for="sobrancelha" class="ml-2 text-gray-700">Sobrancelha - R$ 10,00</label>
                    </div>
                    <div class="flex items-center">
                        <input id="corte-degradê" type="checkbox" name="services[]" value="Corte Degradê" class="form-checkbox h-5 w-5 text-blue-600">
                        <label for="corte-degradê" class="ml-2 text-gray-700">Corte Degradê - R$ 25,00</label>
                    </div>
                </div>
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">
                    Cadastrar Serviços
                </button>
            </div>
        </form>
    </div>
    @endsection
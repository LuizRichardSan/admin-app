@extends('components.layout')

@section('content')
<div class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="w-full  bg-white shadow-lg rounded-lg overflow-hidden flex">

        <!-- Left side: Login Form -->
        <div class="w-1/2 h-screen p-8 flex items-center justify-center relative">

            <!-- Modal surrounding the login form -->
            <div class="bg-white shadow-xl rounded-lg p-10 max-w-md w-full absolute">
                <h2 class="text-2xl font-bold text-gray-700 mb-6 text-center">Login</h2>

                <form method="POST" action={{ route('login.store') }}>
                    @csrf

                    <!-- Name Field -->
                    <div class="mb-2">
                        <label for="name" class="block text-gray-700">Usuário</label>
                        <input id="name" type="text" name="name"
                            class="w-full p-3 mt-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        @error('name')
                        <div class="py-0.5"><p class=" text-red-500  text-center ">{{$message}}</p></div>
                        @enderror                    <!-- Password Field -->
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700">Senha</label>
                        <input id="password" type="password" name="password"
                            class="w-full p-3 mt-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    @error('password')
                    <div class="py-0.5"><p class=" text-red-500  text-center">{{$message}}</p></div>
                    @enderror

                    <!-- Remember Me -->
                    <div class="mb-2 flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember" class="text-gray-600">Lembrar-me</label>
                    </div>
                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                                class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            Entrar
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <!-- Right side: Blue Section -->
        <div class="w-1/2 min-h-screen bg-blue-500 flex items-center justify-center">
            <div class="text-white text-center">
                <x-logo size="w-24"/>
            </div>
        </div>

    </div>
</div>
@endsection


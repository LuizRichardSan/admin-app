@extends('components.layout')

@section('content')
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden flex flex-col md:flex-row">

            <!-- Left side: Login Form -->
            <div class="flex items-center justify-center min-h-screen bg-gray-100 w-full md:w-1/2">

                <!-- Modal surrounding the login form -->
                <div class="bg-white shadow-xl rounded-lg p-8 max-w-md w-full">
                    <h2 class="text-2xl font-bold text-gray-700 mb-6 text-center">Login</h2>

                    <form method="POST" action="{{ route('login.store') }}">
                        @csrf
                        <form-component class=""></form-component>
                    </form>
                </div>
            </div>

            <!-- Right side: Blue Section -->
            <div
                class="w-full md:w-1/2 min-h-screen bg-{{ $settings->primary_color ?? 'gray-900' }} flex items-center justify-center">
                <div class="text-white text-center">
                    <x-logo size="w-32" />
                </div>
            </div>

        </div>
    </div>
@endsection

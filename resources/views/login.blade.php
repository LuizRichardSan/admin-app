@extends('components.layout')

@section('content')
<div class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
  <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden flex flex-col sm:flex-col md:flex-row">
  
    <!-- Lado esquerdo: Formulário de Login -->
    <div class="flex items-center justify-center bg-gray-100 w-full sm:w-full md:w-1/2 min-h-screen p-4">
      <!-- Modal do Formulário de Login -->
      <div class="bg-white shadow-xl rounded-lg p-8 max-w-md w-full">
        <h2 class="text-2xl font-bold text-gray-700 mb-6 text-center">Login</h2>
  
        <form method="POST" action="{{ route('login.store') }}">
          @csrf
          <form-component></form-component>
        </form>
      </div>
    </div>
  
    <!-- Lado direito: Seção Azul (oculta em telas menores) -->
    <div class="w-full sm:w-full md:w-1/2 min-h-[50vh] sm:min-h-[60vh] md:min-h-screen flex items-center justify-center hidden md:flex"
         :class="`bg-${$settings?.primary_color ?? 'gray-900'}`">
      <div class="text-white text-center">
        <x-logo size="w-60" />
      </div>
    </div>
  </div>
</div>
@endsection

@extends('components.layout')
 
@section('content')

<div class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
    <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden flex flex-col md:flex-row">

        <!-- Left side: Login Form -->
        <form-component class="w-full md:w-1/2"></form-component>
        
        <!-- Right side: Blue Section -->
        <div class="w-full md:w-1/2 min-h-screen bg-{{$settings->primary_color ?? 'gray-900'}} flex items-center justify-center">
            <div class="text-white text-center">
                <x-logo size="w-32"/>
            </div>
        </div>

    </div>
</div>





@endsection



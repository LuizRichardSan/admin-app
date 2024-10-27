
@extends('components.layout')
@section('content')

    <navbar-component></navbar-component>
                          <!-- FIM HEADER -->
    <section class="flex">
        <x-left-sidebar />
        <!-- /.sidebar -->

        <div class="content bg-gray-100 w-full p-2 ">
            <div class="items-center bg-white p-3 rounded-md">
                <h2 class="font-bold text-black text-xl pt-2">Dashboard Sale</h2>
                <br/>
                <hr class="h-0.4 bg-black"/>
               <div class="flex" >
                    <span class="material-icons text-blue-500 pt-2">home</span>
                    <p class="text-black text-base pt-2">  Pasteis da Mi</p>
               </div>
            </div>

            <div class="box-info flex justify-around w-full mt-2 gap-2">
                <div class="flex items-center gap-2 bg-gradient-to-r from-red-600 to bg-red-400 w-full p-7 rounded-md ">
                    <span class="material-icons text-red-700">
                        trending_up
                    </span>
                    <p class="text-white text-base">Novos pedidos</p>
                </div>
                <div class="flex items-center gap-2 bg-gradient-to-r from-blue-700 to bg-blue-400 w-full p-7 rounded-md">
                    <span class="material-icons text-blue-500">
                        local_mall
                    </span>
                    <p class="text-white text-base">Clientes ativos</p>
                </div>
                <div class="flex items-center gap-2 bg-gradient-to-r from-green-600 to bg-green-400 w-full p-7 rounded-md">
                    <span class="material-icons text-green-700">
                        monetization_on
                    </span>
                    <p class="text-white text-base">Receita total</p>
                </div>
            </div>

            <div class="feed">

            </div>
        </div>
    </section>



</div>
@endsection



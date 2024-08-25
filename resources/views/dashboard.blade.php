
@extends('components.layout')
@section('content')
    <header class=" bg-blue-400 p-0.1 flex justify-between items-center">
        <div class="info-header text-white flex w-18 p-3 gap-4 hover:text-opacity-70">
            <div class="logo">
                <h3 class="font-bold cursor-pointer text-lg">Pasteis da Mi</h3>
            </div>

            <div class="icons-header ">
                <span class="material-icons">
                    search
                </span>
           </div>
        </div>

        <div class="flex items-center gap-3 ">
            <span class="material-icons hover:opacity-70">
                    notifications
            </span>
            <span class="material-icons hover:opacity-70">
                    mail
            </span>
            <x-logo size="w-24 cursor-pointer"/>

            <div class="dropdown-menu hidden absolute right-10 top-10 mt-2 w-56 bg-white border rounded-lg shadow-lg" id="dropdownMenu">
                <ul class="py-2">
                    <li>
                        <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Meu Perfil</a>
                    </li>
                    <li>
                        <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Configurações</a>
                    </li>
                    <li>
                        <a href="{{ route('login.logout') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

                          <!-- FIM HEADER -->


    <section class="flex">
        <div class="sidebar w-1/4 bg-white h-screen text-xl">
            <h3 class="text-gray-600 text-xl ml-2 font-bold">Home</h3>
            <a href="#" class="block ml-0.1 mt-2 text-gray-800  cursor-pointer hover:border-l-4 border-blue-600 "><span class="material-icons">home</span>Relatórios</a>
            <a href="#" class="block ml-0.1 text-gray-800 border-x-blue-800 cursor-pointer hover:border-l-4 border-blue-600 hover:from-neutral-500"><span class="material-icons">home</span>Relatórios</a>
            <a href="#" class="block ml-0.1 text-gray-800 cursor-pointer hover:border-l-4 border-blue-600"><span class="material-icons">home</span>Relatórios</a>
            <a href="#" class="block ml-0.1 text-gray-800 cursor-pointer hover:border-l-4 border-blue-600 "><span class="material-icons">home</span>Relatórios</a>
            <br/>
            <hr>
            <h3 class="text-gray-600 text-xl ml-2 font-bold">Home</h3>
            <a href="#" class="block ml-0.1 mt-2 text-gray-800 cursor-pointer hover:border-l-4 border-blue-600"><span class="material-icons">home</span>Relatórios</a>
            <a href="#" class="block ml-0.1 text-gray-800 cursor-pointer hover:border-l-4 border-blue-600"><span class="material-icons">home</span>Relatórios</a>
            <a href="#" class="block ml-0.1 text-gray-800 cursor-pointer hover:border-l-4 border-blue-600"><span class="material-icons">home</span>Relatórios</a>
            <a href="#" class="block ml-0.1 text-gray-800 cursor-pointer hover:border-l-4 border-blue-600"><span class="material-icons">home</span>Relatórios</a>
            <br/>
            <hr>
        </div> <!-- /.sidebar -->

        <div class="content bg-gray-300 w-full p-2 ">
            <div class="items-center bg-white p-3 rounded-md">
                <h2 class="font-bold text-black text-xl pt-2">Dashboard Sale</h2>
                <br/>
                <hr class="h-0.4 bg-black"/>
               <div class="flex" >
                    <span class="material-icons text-blue-500 pt-2">home</span>
                    <p class="text-black text-base pt-2">  Pasteis da Mi</p>
               </div>
            </div>

            <div class="box-info flex justify-around w-full mt-2">
                <div class="flex items-center gap-2">
                    <span class="material-icons text-blue-500">
                        trending_up
                    </span>
                    <p class="text-black text-base">Novos pedidos</p>
                </div>
                <div class="flex items-center gap-2">
                    <span class="material-icons text-blue-500">
                        local_mall
                    </span>
                    <p class="text-black text-base">Clientes ativos</p>
                </div>
                <div class="flex items-center gap-2">
                    <span class="material-icons text-blue-500">
                        monetization_on
                    </span>
                    <p class="text-black text-base">Receita total</p>
                </div>
            </div>
            </div>
        </div>
    </section>



</div>
@endsection



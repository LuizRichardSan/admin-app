    <header class=" bg-gray-900 p-0.1 flex justify-between items-center z-40 shadow-sm px-10">
        <div class="info-header text-white  flex w-18 p-3 gap-10 hover:text-opacity-70">
            <div class="logo">
                <h3 class="font-bold cursor-pointer text-lg text-white"><a href="{{route('dashboard')}}">
                    Sistema Nexos
                    </a></h3>
            </div>

            <div class="menus flex gap-5 text-white">
                <h3>
                    <a href="{{route('products.index')}}">Produtos</a>
                </h3>

                <h3>
                    <a href="">Categorias</a>
                </h3>
           </div>
        </div>

        <div class="flex items-center gap-5 ">
            <span class="material-icons hover:opacity-70 text-white cursor-pointer">
                    notifications
            </span>
            <span class="material-icons hover:opacity-70 text-white cursor-pointer">
                    mail
            </span>
            <x-logo size="w-24 cursor-pointer"/>

            <div class="dropdown-menu fade-in hidden absolute right-10 top-10 mt-2 w-56 bg-white border rounded-lg shadow-lg" id="dropdownMenu">
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

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      @vite('resources/css/app.css')
      
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>


<body class="m-0 p-0 box-border h-full" >
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

        <div class="flex items-center gap-3 cursor-pointer">
            <span class="material-icons hover:opacity-70">
                    notifications
            </span>
            <span class="material-icons hover:opacity-70">
                    mail
            </span>
            <x-logo size="w-24"/>
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
        
        <div class=" bg-gray-300 w-full p-2 ">
            <div class="items-center">
                <h2 class="font-bold text-white text-xl">Dashboard Sale</h2>
                <br/>
                <hr/>
                <p><span class="material-icons mt-2">home /</span>Mi Dashboard</p>
            </div>
        </div>
    </section>


    </body>
</html>

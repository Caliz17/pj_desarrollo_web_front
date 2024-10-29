<div class="navbar bg-gradient-to-r from-blue-700 to-indigo-800 z-50 fixed top-0 left-0 right-0 p-3 shadow-lg">
    <div class="navbar-start">
        <!-- Dropdown para móviles -->
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <i class="fas fa-bars text-2xl text-yellow-300"></i>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-blue-800 text-white rounded-md z-10 mt-2 w-52 shadow-md">
                <li class="py-2">
                    <a class="block text-yellow-400 font-bold">Categorías</a>
                    <ul class="rounded bg-blue-800 mt-2">
                        <li class="py-2"><a href="/general" class="flex items-center space-x-2"><i class="fas fa-globe"></i> <span>General</span></a></li>
                        <li class="py-2"><a href="/entertainment" class="flex items-center space-x-2"><i class="fas fa-film"></i> <span>Entretenimiento</span></a></li>
                        <li class="py-2"><a href="/business" class="flex items-center space-x-2"><i class="fas fa-building"></i> <span>Negocios</span></a></li>
                        <li class="py-2"><a href="/health" class="flex items-center space-x-2"><i class="fas fa-heartbeat"></i> <span>Salud</span></a></li>
                        <li class="py-2"><a href="/technology" class="flex items-center space-x-2"><i class="fas fa-laptop"></i> <span>Tecnología</span></a></li>
                        <li class="py-2"><a href="/sports" class="flex items-center space-x-2"><i class="fas fa-futbol"></i> <span>Deportes</span></a></li>
                        <li class="py-2"><a href="/science" class="flex items-center space-x-2"><i class="fas fa-flask"></i> <span>Ciencia</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Título de la página -->
        <a class="text-3xl text-yellow-400 font-extrabold flex items-center space-x-2" href="/">
            <i class="fa-regular fa-chess-queen"></i>
            <span>Batalla Real</span>
        </a>
    </div>

    <!-- Centro de la barra de navegación (oculto en móviles) -->
    <div class="navbar-center hidden lg:flex text-white">
        <!-- Opciones adicionales en el centro si es necesario -->
    </div>

    <!-- Opciones de inicio de sesión -->
    <div class="navbar-end flex items-center space-x-4">
        @if (session('api_token'))
            <a href="/logout" class="flex items-center space-x-2 btn btn-ghost text-sky-200 bg-red-500 hover:bg-red-700 text-sm px-4 py-2 rounded-full shadow-md">
                <h1 class="text-white text-sm font-bold">{{ session('name') }}</h1>
                <i class="fas fa-sign-out-alt text-white"></i>
                <span>Cerrar Sesión</span>
            </a>
        @else
            <a href="/login" class="btn btn-ghost text-white text-lg bg-green-600 hover:bg-green-700 font-bold px-4 py-2 rounded-full shadow-md flex items-center space-x-2">
                <i class="fas fa-sign-in-alt"></i>
                <span>Acceder</span>
            </a>
        @endif
    </div>
</div>

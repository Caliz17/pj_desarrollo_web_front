@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section style="
    background-image: url('https://images2.alphacoders.com/112/1124066.jpg'); 
    background-size: cover; 
    background-repeat: no-repeat; 
    background-position: center;">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:h-screen">
        <div class="w-full bg-gradient-to-b from-blue-700 to-indigo-800 rounded-lg shadow-lg dark:border sm:max-w-md xl:p-0">
            @if ($errors->has('error'))
                <div class="bg-red-500 text-white px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ $errors->first('error') }}</span>
                </div>
            @endif

            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-2xl font-extrabold text-yellow-300 md:text-3xl text-center">
                    Ingresa a tu cuenta
                </h1>
                <form class="space-y-4 md:space-y-6" action="/access" method="POST">
                    @csrf
                    @method('POST')
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-yellow-300">Correo electrónico</label>
                        <input type="email" name="email" id="email"
                            class="bg-blue-600 border border-blue-700 text-white placeholder-yellow-300 rounded-lg focus:ring-yellow-400 focus:border-yellow-400 block w-full p-2.5"
                            placeholder="correo@ejemplo.com" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-yellow-300">Contraseña</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-blue-600 border border-blue-700 text-white placeholder-yellow-300 rounded-lg focus:ring-yellow-400 focus:border-yellow-400 block w-full p-2.5"
                            required="">
                    </div>

                    <button type="submit"
                        class="w-full text-white bg-gradient-to-r from-green-500 to-green-700 p-3 font-bold rounded-lg text-sm text-center hover:bg-green-600"
                        data-toggle="tooltip" data-placement="top" title="Ingresar">
                        <i class="fas fa-sign-in-alt"></i>
                        Ingresar
                    </button>
                    
                    <p class="text-sm font-light text-yellow-300">
                        ¿Todavía no tienes una cuenta? 
                        <a href="/form" class="font-medium text-yellow-400 hover:underline">Crear Cuenta</a>
                    </p>
                    <p class="text-sm font-light text-yellow-300">También puedes iniciar sesión con</p>

                    <div class="flex items-center justify-center space-x-4">
                        <a href="#"
                            class="flex items-center justify-center w-full px-4 py-2 text-white bg-blue-500 hover:bg-blue-600 font-medium rounded-lg text-sm"
                            data-toggle="tooltip" data-placement="top" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="flex items-center justify-center w-full px-4 py-2 text-white bg-gray-900 hover:bg-gray-950 font-medium rounded-lg text-sm"
                            data-toggle="tooltip" data-placement="top" title="GitHub">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="/google-auth/redirect"
                            class="flex items-center justify-center w-full px-4 py-2 text-white bg-red-500 hover:bg-red-600 font-medium rounded-lg text-sm"
                            data-toggle="tooltip" data-placement="top" title="Google">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

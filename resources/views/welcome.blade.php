@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="bg-cover bg-center h-screen flex justify-center items-center text-white relative"
    style="background-image: url('https://images5.alphacoders.com/128/1284524.jpg');">

    <div
        class="bg-gradient-to-b from-blue-900 to-indigo-900 bg-opacity-90 p-10 rounded-lg shadow-2xl backdrop-filter backdrop-blur-lg transition-transform duration-1000 transform scale-95 opacity-0 animate-fadeIn delay-500">
        <form method="GET" action="{{ route('login.index') }}">
            <div class="flex flex-col items-center text-center">
                <h1 class="text-6xl font-bold mb-4 text-yellow-400 drop-shadow-lg">
                    ¡Bienvenido, Guerrero!
                </h1>
                <p class="text-2xl text-gray-200 mb-6 shadow-md italic">
                    Que esperas para liderar la batalla? ¡La arena te espera!
                </p>
                @if(!session()->has('api_token')) <!-- Verifica si el token no está en la sesión -->
                    <button type="submit"
                        class="px-6 py-3 bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold rounded-full transition transform hover:scale-105 shadow-lg mt-4">
                        <i class="fas fa-sign-in-alt mr-2"></i> Iniciar sesión
                    </button>
                @endif
            </div>
        </form>
    </div>

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-fadeIn {
            animation: fadeIn 1.2s ease-in-out forwards;
        }

        .delay-500 {
            animation-delay: 0.5s;
        }
    </style>
</div>
@endsection

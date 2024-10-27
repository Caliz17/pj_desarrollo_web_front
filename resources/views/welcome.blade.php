@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="bg-cover bg-center h-screen flex justify-center items-center text-white relative"
        style="background-image: url('https://images5.alphacoders.com/128/1284524.jpg');">

        <div
            class="bg-black bg-opacity-80 p-8 rounded-lg shadow-lg backdrop-filter backdrop-blur-lg transition-opacity duration-1000 transform translate-y-0 opacity-100 animate-fadeIn">
            <form method="GET" action="{{ route('login.index') }}">
                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-5xl text-center mb-4 shadow-lg">¡Bienvenido a la Batalla!</h1>
                    <p class="text-2xl text-center mb-6 shadow-md">Que comience el juego de cartas épico.</p>
                    <button type="submit"
                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:focus:ring-yellow-900">Comencemos</button>
                </div>
            </form>
        </div>

        <style>
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(-20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .animate-fadeIn {
                animation: fadeIn 1s ease-in-out forwards;
            }
        </style>

    </div>
@endsection

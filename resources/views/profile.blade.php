@extends('layouts.app')

@section('title', 'Perfil de Usuario')

@section('content')
<div class="relative h-screen flex items-center justify-center">
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('https://images6.alphacoders.com/128/1284530.jpg');"></div>
        <div class="container mx-auto mt-10 relative z-10">
            <div class="bg-gradient-to-br from-blue-700 to-indigo-800 text-white rounded-lg p-6 shadow-2xl"
                style="max-width: 600px; margin: auto;">
                <div class="text-center mb-6">
                    <h2 class="text-3xl font-bold">⚔️ Perfil de Usuario ⚔️</h2>
                    <p class="text-yellow-400">¡Bienvenido de vuelta, {{ $data->name }}!</p>
                </div>

                <!-- Información de Usuario -->
                <div class="space-y-4">
                    <div class="flex items-center justify-between bg-blue-900 p-3 rounded-lg shadow-md">
                        <p class="text-yellow-300">ID de Usuario</p>
                        <p><strong>{{ $data->id }}</strong></p>
                    </div>

                    <div class="flex items-center justify-between bg-blue-900 p-3 rounded-lg shadow-md">
                        <p class="text-yellow-300"><i class="fas fa-user text-yellow-500"></i> Nombre de Usuario</p>
                        <p><strong>{{ $data->name }}</strong></p>
                    </div>

                    <div class="flex items-center justify-between bg-blue-900 p-3 rounded-lg shadow-md">
                        <p class="text-yellow-300"><i class="fas fa-envelope text-yellow-500"></i> Correo Electrónico</p>
                        <p><strong>{{ $data->email }}</strong></p>
                    </div>

                    <div class="flex items-center justify-between bg-blue-900 p-3 rounded-lg shadow-md">
                        <p class="text-yellow-300"><i class="fas fa-level-up-alt text-yellow-500"></i> Nivel</p>
                        <p><strong>{{ $data->level ?? 'Sin nivel asignado' }}</strong></p>
                    </div>

                    <div class="flex items-center justify-between bg-blue-900 p-3 rounded-lg shadow-md">
                        <p class="text-yellow-300"><i class="fas fa-trophy text-yellow-500"></i> Trofeos</p>
                        <p><strong>{{ $data->trophies ?? 'Sin trofeos' }}</strong></p>
                    </div>
                </div>

                <!-- Botón Editar Perfil -->
                <div class="text-center mt-6">
                    <form action="/login" method="GET">
                        <button type="submit" 
                            class="bg-yellow-500 hover:bg-yellow-600 text-gray-800 font-bold py-2 px-4 rounded-full shadow-lg transform hover:scale-105 transition duration-300">
                            <i class="fas fa-edit"></i> Editar Perfil
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

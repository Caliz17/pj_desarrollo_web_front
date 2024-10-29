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
                    Crea tu cuenta
                </h1>
                <form id="registerForm" class="space-y-4 md:space-y-6" action="/register" method="POST" onsubmit="return validateForm()">
                    @csrf
                    @method('POST')
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-yellow-300">Nombre de usuario</label>
                        <input type="text" name="name" id="name"
                            class="bg-blue-600 border border-blue-700 text-white placeholder-yellow-300 rounded-lg focus:ring-yellow-400 focus:border-yellow-400 block w-full p-2.5"
                            placeholder="Nombre de usuario" required="">
                    </div>

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

                    <div>
                        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-yellow-300">Confirmar Contraseña</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="••••••••"
                            class="bg-blue-600 border border-blue-700 text-white placeholder-yellow-300 rounded-lg focus:ring-yellow-400 focus:border-yellow-400 block w-full p-2.5"
                            required="">
                        <label id="error-message" class="text-red-500 text-sm hidden">Las contraseñas no coinciden.</label>
                    </div>

                    <div class="flex justify-between">
                        <a href="/login"
                            class="w-auto text-white bg-green-500 p-2 hover:bg-green-600 font-medium rounded-lg text-sm text-center"
                            data-toggle="tooltip" data-placement="top" title="Regresar">
                            <i class="fas fa-sign-in-alt"></i> Regresar
                        </a>

                        <button type="submit"
                            class="w-auto text-white bg-gradient-to-r from-green-500 to-green-700 p-3 font-bold rounded-lg text-sm text-center hover:bg-green-600"
                            data-toggle="tooltip" data-placement="top" title="Registrar">
                            <i class="fas fa-sign-in-alt"></i> Registrar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    function validateForm() {
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('password_confirmation').value;
        var errorMessage = document.getElementById('error-message');

        if (password !== confirmPassword) {
            errorMessage.classList.remove('hidden'); // Muestra el mensaje de error
            return false; // Evita el envío del formulario
        } else {
            errorMessage.classList.add('hidden'); // Oculta el mensaje si las contraseñas coinciden
        }
        return true; // Permite el envío del formulario
    }
</script>
@endsection

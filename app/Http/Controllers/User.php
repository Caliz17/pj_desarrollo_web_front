<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Laravel\Socialite\Facades\Socialite;

class User extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $apiUrl = env('API');

        $response = Http::post($apiUrl . '/login-user', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($response->object()->status === 200) {
            $data = $response->json();

            session(['api_token' => $data['token']]);
            session(['name' => $data['name']]);

            return redirect()->route('home')->with('success', 'Login successful');
        } else {
            return back()->withErrors(['error' => 'Error. Por favor corrobora tus datos.']);
        }
    }

    public function logout()
    {
        session()->forget('api_token');
        session()->forget('name');
        Auth::logout();
        return redirect()->route('home')->with('success', 'Logged out successfully');
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();

        $apiUrl = env('API');

        $response = Http::post($apiUrl . '/login-google', [
            'google_id' => $user->id,
            'google_token' => $user->token,
            'email' => $user->email,
            'name' => $user->name,
        ]);

        if ($response->successful()) {
            $data = $response->json();
            session(['api_token' => $data['token']]);
            session(['name' => $data['name']]);

            return redirect()->route('home')->with('success', 'Login successful');
        } else {
            return back()->withErrors(['error' => 'Registro Fallido. Por favor revisar sus credenciales.']);
        }
    }

    public function formUser(){
        return view('form-user');
    }

    public function registerUser(Request $request){
        $apiUrl = env('API');

        $response = Http::post($apiUrl . '/register-user', [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,
        ]);

        if ($response->successful()) {
            return redirect()->route('login.index')->with('success', 'User registered successfully');
        } else {
            return back()->withErrors(['error' => 'Registro Fallido. Por favor revisar sus credenciales.']);
        }
    }
}

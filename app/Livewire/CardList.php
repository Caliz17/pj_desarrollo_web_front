<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Carbon\Carbon;

class CardList extends Component
{
    public $news = [];
    public $perPage = 5;
    public $page = 1;
    public function mount()
    {

        Carbon::setLocale('es');
        $apiUrl = env('API');
        $token = session('api_token');

        if (!session()->has('api_token')) {
            $response = Http::get($apiUrl . '/news-index');
            $this->news = $response['data'];
        } else {
            $response = Http::withHeaders([
                'Authorization' => $token ? 'Bearer ' . $token : '',
            ])->get($apiUrl . '/news-show/');
            $this->news = $response['data'];
        }

    }
    public function render()
    {
        return view('unautorized.card-list');
    }
}

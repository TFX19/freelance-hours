<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\FacadesAuth;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {

        // $user = User::query()->create([
        //     'name' => 'Tiagooo',
        //     'email' => 'tiagooo@email.com',
        //     'password'=> 'tiagooo',
        // ]);

        // dd($user);
        
        return view('welcome');
    }
}

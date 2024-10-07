<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {

        $user = User::query()->create([
            'name' => 'Tiago',
            'email' => 'tiago@email.com',
            'password'=> 'tiago',
        ]);

        dd($user);

        //1:15:50

        return view('teste.tiago');
    }
}

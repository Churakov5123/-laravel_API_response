<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\User;

class CustomeController extends Controller
{

    public function customeBar(Request $request)
    {
        $loginsss = $request->get('login');
        $user = User::where('login', $loginsss)->first();
        $logins = $user->login;
        $email = $user->email;
        $surname = $user->email;
        $patronymic = $user->patronymic;
        $json = [
            'logins' => $logins,
            'email' => $email,
            'surname' => $surname,
            '$patronymic' => $patronymic,
        ];

        return response()->json($json,200);

    }
}

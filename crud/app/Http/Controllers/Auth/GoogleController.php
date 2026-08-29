<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    // redireciona para o Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // processa o retorno do Google
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // procura usuário pelo e-mail
            $user = User::where(
                'email',
                $googleUser->getEmail()
            )->first();

            // se não existir, cria
            if (!$user) {
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'password' => Hash::make(Str::random(16)),
                ]);
            }

            // faz login
            Auth::login($user);

            // redireciona
            return redirect()->intended('/admin/cursos');

        } catch (Exception $e) {
            return redirect('/login')->with(
                'error',
                'Falha ao autenticar com o Google.'
            );
        }
    }
}

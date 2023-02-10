<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Permet d'afficher la page de connexion
     * @return Application|Factory|View
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Permet d'afficher la page d'enregistrement
     * @return Application|Factory|View
     */
    public function register()
    {
        return view('auth.signup');
    }

    /**
     * Permet de s'authentifier sur l'application
     * @return RedirectResponse
     */
    public function authenticate(Request $request)
    {
        $request->validate([
           'email' => 'required|email',
           'password' => 'required'
        ]);

        if(auth()->attempt($request->only('email', 'password'))){
            return redirect('/');
        }
        return redirect()->back()->withErrors('Les identifiants ne correspondent pas');
    }

    /**
     * Permet de s'enregistrer sur l'application
     * @return RedirectResponse
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'lastname' =>'required',
            'phone' =>'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => $request['nom'],
            'lastname' => $request['prenom'],
            'phone' => $request['tel'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        Account::create([
            'account_number' => rand(1000, 100000),
            'account_amount' => 0,
            'account_bank' => 'MyBank',
            'account_user' => $user,
        ]);

        return redirect('/');
    }

    /**
     * Permet de se déconnecter
     * @return void
     */
    public function logout()
    {
        auth()->logout();
    }
}

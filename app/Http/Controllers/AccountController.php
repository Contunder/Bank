<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Account;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class AccountController extends Controller
{
    /**
     * Permet d'afficher la page de détail d'un produit
     * @param $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $account = Account::find($id);

        return view('accounts.show')->with('account', $account);
    }

}

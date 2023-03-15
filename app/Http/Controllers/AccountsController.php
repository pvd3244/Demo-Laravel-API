<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    //
    public function index()
    {
        $model = new Account();
        $accounts = $model->getAllAccount();
        return view('accounts.index', [
            'accounts' => $accounts,
        ]);
    }
}

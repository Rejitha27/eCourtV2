<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{

    public function adminLogout()
    {
        auth()->guard('admin')->logout();
        return redirect(route('/'));
    }

    public function clientLogout()
    {
        auth()->guard('client')->logout();
        return redirect(route('/'));
    }

    public function lawyerLogout()
    {
        auth()->guard('lawyer')->logout();
        return redirect(route('/'));
    }

    public function thirdpartyLogout()
    {
        auth()->guard('thirdparty')->logout();
        return redirect(route('/'));
    }
}

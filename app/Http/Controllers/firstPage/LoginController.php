<?php

namespace App\Http\Controllers\firstPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    function checklogin(Request $request) {
        $this->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    }
}

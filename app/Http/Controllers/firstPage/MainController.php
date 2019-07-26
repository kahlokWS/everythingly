<?php

namespace App\Http\Controllers\firstPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class MainController extends Controller
{
    function checklogin(Request $request) {
        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user_data = array(
            'username' => $request->get('username'),
            'password' => $request->get('password')
        );

        if (Auth::guard('user')->attempt($user_data)) {
            return redirect('dashboard');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    function logout() {
        Auth::logout();
        return redirect("/");
    }
}

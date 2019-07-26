<?php

namespace App\Http\Controllers\bodyPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class profileController extends Controller
{
    public function index() {
        $user_info = Auth::guard('user')->user();
        return view("bodyPage\profile", compact('user_info'));
    }
}

<?php

namespace App\Http\Controllers\bodyPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');

    // }

    protected $primaryKey = 'username';

    public function index() {
        // exit();
        dd(Auth::guard('user')->user());
        return view("bodyPage\dashboard");
    }
}

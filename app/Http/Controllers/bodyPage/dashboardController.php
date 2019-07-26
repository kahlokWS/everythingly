<?php

namespace App\Http\Controllers\bodyPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected $primaryKey = 'username';

    public function index() {
        dd(Auth::user()->username);
        return view("bodyPage\dashboard");
    }
}

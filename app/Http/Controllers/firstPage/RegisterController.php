<?php

namespace App\Http\Controllers\firstPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('firstPage.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = date("Y-m-d", strtotime($request->get('year') . "-" . $request->get('month') . "-" . $request->get('day')));
        $this->validate($request, [
            "username" => "required|unique:profile|max:25",
            "name" => "required",
            "email" => "required|unique:profile|email",
            "password" =>"required|confirmed",
        ]);
        $password = $request->get('password');
        $hash = bcrypt($password);
        DB::table('profile')
            ->insert([
                "username" => $request->get('username'),
                "fullname" => $request->get('name'),
                "email" => $request->get('email'),
                "dob" => $date,
                "password" => $hash,
            ]);
        return redirect()->back()->with('success', "Account Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

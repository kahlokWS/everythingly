<?php

namespace App\Http\Controllers\bodyPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use DateTime;
use Auth;

class profileController extends Controller
{
    public function index() {
        $user_info = Auth::guard('user')->user();
        $info = $this->profileInfo($user_info->user_id)[0];
        $gender = 0 == $info->gender ? "Male" : "Female";
        $los = $this->length_of_service($info->join_date);
        return view("bodyPage\selfProfile", compact('info', 'user_info', 'gender', 'los'));
    }

    public function profileInfo($user_id) {
        $profile = DB::table('profile_info')
            ->select('*')
            ->where('user_id', $user_id)
            ->get();
        return $profile;
    }

    public function length_of_service($join_date) {
        $date1 = new DateTime($join_date);
        $date2 = new DateTime(date("Y-m-d"));
        $interval = $date1->diff($date2);
        $los = $interval->y . " Year(s) " . $interval->m . " Month(s) " . $interval->d . " Day(s)";
        return $los;
    }
}

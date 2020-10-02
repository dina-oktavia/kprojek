<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        $user_mhs = DB::table('user_mhs')->get();
        return view('profile', ['user_mhs' => $user_mhs]);
    }

    public function editProfile()
    { 
        $user_mhs = DB::table('user_mhs')->get();
        return view('edit-profile', ['user_mhs' => $user_mhs]);
        // $user = DB::table('user_mhs')->where('id', $id)->first();
        // return view('edit-profile', compact('user_mhs'));
    }
}
    // public function editProcess()
    // {
        
    // }
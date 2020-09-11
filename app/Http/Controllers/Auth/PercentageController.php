<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PercentageController extends Controller
{
    public function index()
    {
        return view('percentage');
    }
}

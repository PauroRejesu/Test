<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use App\Models\JobTitle;

class PageController extends Controller
{
    public function home()
        {
            return view('index');
        }
    public function profile(Employee $profile)
        {
            return view('profile', compact('profile'));
        }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function ShowDashborad()
    {
       return view('admin.pages.dashboard');
    }
}

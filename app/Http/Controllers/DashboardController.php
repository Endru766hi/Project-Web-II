<?php

namespace App\Http\Controllers;
use App\Models\Dashboard;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dataTabel = Dashboard::all();
        // dd($dataTabel);

        return view('Dashboard',compact('dataTabel'));
}
}

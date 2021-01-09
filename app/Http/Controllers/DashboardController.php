<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $shortenLink = ShortenLink::whereOwnerIp($this->ownerIp)->latest()->first();

        return view('dashboard');
    }
}

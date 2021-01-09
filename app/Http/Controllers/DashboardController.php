<?php

namespace App\Http\Controllers;

use App\Models\ShortenLink;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $shorten_links = ShortenLink::with('Log')->latest()->get();
        $count_ip = $shorten_links->groupBy('owner_ip')->count();
        foreach ($shorten_links as $shorten_link) {
            $shorten_link->count_log = count($shorten_link->Log);
        }
        $count_click = $shorten_links->sum('count_log');

        return view('dashboard', ['shorten_links' => $shorten_links, 'count_ip' => $count_ip, 'count_click' => $count_click]);
    }
}

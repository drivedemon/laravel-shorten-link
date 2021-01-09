<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShotenLinkRequest;
use App\Models\LogLink;
use App\Models\ShortenLink;
use Carbon\Carbon;
use Request;

class ShortenLinkController extends Controller
{
    public function __construct()
    {
        $this->owner_ip = Request::ip();
    }

    public function index()
    {
        $shorten_links = ShortenLink::whereOwnerIp($this->owner_ip)
            ->whereDate('created_at', '=', Carbon::now())
            ->latest()
            ->get();

        return view('welcome', compact('shorten_links'));
    }

    public function store(ShotenLinkRequest $request)
    {
        ShortenLink::create([
            ShortenLink::LINK => $request->link,
            ShortenLink::CODE => uniqid(),
            ShortenLink::OWNER_IP => $this->owner_ip,
        ]);

        return redirect('/')->with('success', 'Generated Successfully!');
    }

    public function shortenLink($code)
    {
        $data = ShortenLink::where(['code' => $code, 'owner_ip' => $this->owner_ip])->latest()->first();
        LogLink::create([
            LogLink::LINK_ID => $data->id,
        ]);

        return redirect($data->link);
    }
}

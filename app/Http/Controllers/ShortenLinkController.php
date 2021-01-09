<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShotenLinkRequest;
use App\Models\LogLink;
use App\Models\ShortenLink;
use Request;

class ShortenLinkController extends Controller
{
    public function __construct()
    {
        $this->ownerIp = Request::ip();
    }

    public function index()
    {
        $shortenLink = ShortenLink::whereOwnerIp($this->ownerIp)->latest()->first();

        return view('welcome', compact('shortenLink'));
    }

    public function store(ShotenLinkRequest $request)
    {
        $uniqCode = "bluebik/".uniqid();
        ShortenLink::create([
            ShortenLink::LINK => $request->link,
            ShortenLink::CODE => $uniqCode,
            ShortenLink::OWNER_IP => $this->ownerIp,
        ]);

        return redirect('/')->with('success', 'Generated Successfully!');
    }

    public function shortenLink($code)
    {
        $Link = ShortenLink::where(['code' => $code, 'owner_ip' => $this->owner_ip])->latest()->first();

        return redirect($find->link);
    }
}

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
        ShortenLink::create([
            ShortenLink::LINK => $request->link,
            ShortenLink::CODE => uniqid(),
            ShortenLink::OWNER_IP => $this->ownerIp,
        ]);

        return redirect('/')->with('success', 'Generated Successfully!');
    }

    public function shortenLink($code)
    {
        $data = ShortenLink::where(['code' => $code, 'owner_ip' => $this->ownerIp])->latest()->first();
        LogLink::create([
            LogLink::LINK_ID => $data->id,
        ]);

        return redirect($data->link);
    }
}

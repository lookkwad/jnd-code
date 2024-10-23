<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Links;
use Illuminate\Support\Str;

class LinksController extends Controller
{
    public function index()
    {
        $list = Links::getLinks();
        return view('links.list', ['links_list' => $list]);
    }

    public function insert(Request $request)
    {
        $rules = [
            'long_url' => 'required|url:http,https',
        ];

        $attribute = [
            'long_url' => 'Long URL',
        ];

        $request->validate($rules, [], $attribute);

        $short_url = Str::random(5);
        $request->merge([
            'short_url' => $short_url
        ]);

        Links::insert($request);
        return $short_url;
    }

    public function shortLink($short_url)
    {
        $find = Links::where('short_url', $short_url)->first();
        return redirect($find->long_url);
    }
}

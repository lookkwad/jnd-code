<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $list = Admin::getLinksAll();
        return view('admin.list', ['links_list' => $list]);
    }

    public function editLinks($id)
    {
        $list = Admin::getLinksById($id);
        return view('admin.edit', ['links_edit' => $list]);
    } 

    public function updateLinks(Request $request)
    {
        $rules = [
            'long_url' => 'required|url:http,https',
            'short_url' => 'required|min_digits:5'
        ];

        $attribute = [
            'long_url' => 'Long URL',
            'short_url' => 'Short URL',
        ];

        $request->validate($rules, [], $attribute);

        return Admin::updateLinks($request);
    } 

    public function deleteLinks(Request $request)
    {
        return Admin::deleteLinks($request);
    } 
}

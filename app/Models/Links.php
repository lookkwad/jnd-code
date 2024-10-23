<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Links extends Model
{
    use HasFactory;

    public static function getLinks()
    {
        return DB::table('links')
            ->where('created_by', Auth::user()->id)
            ->get();
    }

    public static function insert($request)
    {
        return DB::table('links')->insert([
            'long_url' => $request->long_url,
            'short_url' => $request->short_url,
            'created_by' => Auth::user()->id,
        ]);
    }
}

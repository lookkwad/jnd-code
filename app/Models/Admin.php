<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Admin extends Model
{
    use HasFactory;

    public static function getLinksAll()
    {
        return DB::table('links')
                ->join('users', 'users.id', '=', 'links.created_by')
                ->get();
    }

    public static function getLinksById($id)
    {
        return DB::table('links')->where('id', '=', $id)->first();
    }

    public static function updateLinks($request)
    {
        return DB::table('links')
            ->where('id', '=', $request->id)
            ->update([
                'long_url' => $request->long_url,
                'short_url' => $request->short_url,
                'updated_by' => Auth::user()->id,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
    }

    public static function deleteLinks($request)
    {
        return DB::table('links')->where('id', '=', $request->id)->delete();
    }
}

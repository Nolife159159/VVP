<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function GetUserInfo(Request $request)
    {
        $data = $request;
        $qry = DB::table('zaidejai')
            ->select('id', 'vardas', 'slaptazodis')
            ->where('vardas', '=', $data['username']);

        if (!$qry->exists())
            return response()->json('* Toks vartotojas neegzistuoja', 404);
        else if ($qry->get()->first()->slaptazodis != $data['password'])
            return response()->json('* Blogai įvestas slaptažodis', 404);
        else
            return redirect('home');
    }
}

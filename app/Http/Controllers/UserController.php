<?php

namespace App\Http\Controllers;

use iluminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function users()
        {
            $users = DB::table('users')->get();
            return view('users', ['users' => $users]);

            // $users = DB::table('users')->get();
            //return view('dashboard', ['user' => $users]);
        }
}

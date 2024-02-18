<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request) {

        $query = User::query();
        
        $users = $query->get();

        return view('users.index', compact('users'));
    }
}

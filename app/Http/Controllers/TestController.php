<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class TestController extends Controller
{
    public function index(){
        $users = User::paginate(10);

        return view('test.test', compact('users'));
    }
}

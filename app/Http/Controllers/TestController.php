<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;


class TestController extends Controller
{
    public function index(){
        $users = User::paginate(10);

        return view('test.test', compact('users'));
    }

    public function new(){
        $rand = rand(1, 1000);
        $user = new User();
        $user->name = 'Aries Allen';
        $user->email = 'aries'.$rand.'@allen.com';
        $user->password = bcrypt('ari');
        $user->save();

        return $user;
        //return view('test.new');
    }

    public function AddMassive(){

        $data = ['name' => 'action'];
        $categories = Category::create($data);

        return $categories;
    }

    public function UpdateUser(){

        $data = ['name' => 'altern user', 'email' => 'correo@alterno.net'];

        $user = User::find(102);
        $user->update($data);
        //$user->save();
        return $user;
        
    }

    public function DeleteUser(){

        /*
        $users = User::whereIn('id', [102, 103, 104])->delete(); // para eliminar varios registros
        return ["message" => "Users deleted successfully"];
        */ 
        $user = User::find(102);
        $user->delete();
        return ["message" => "User deleted successfully"];
    }
}

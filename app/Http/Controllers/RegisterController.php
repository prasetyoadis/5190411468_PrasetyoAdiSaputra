<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function saveUser(Request $request){
        $dataValid = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        $dataValid['password'] = Hash::make($dataValid['password']);
        User::create($dataValid);

        return redirect('/login')->with('sukses', 'Registrasi Berhasil..');
    }
}

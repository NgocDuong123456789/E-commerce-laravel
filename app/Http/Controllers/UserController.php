<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where(['email' => $request->email])->first();
        if (!$user || !Hash::check($request->passWord, $user->passWord)) {
            return 'user name or password is not matched';
        } else {
            session()->put('user', $user);
            return  redirect('product');
        }
    }
}

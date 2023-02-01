<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login(UserLoginRequest $request){
        $user = User::where('email',$request->email)->first();
        if (!$user || !Hash::check($request->password,$user->password)){
            return $this->error('Ushbu foydalanuvchi bizning tizimda mavjud emas!',404,'text');
        }
        Auth::login($user);
        $token = $user->createToken('my-app-token')->plainTextToken;

        $user = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email
        ];

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return $this->success($response,201);
    }
}

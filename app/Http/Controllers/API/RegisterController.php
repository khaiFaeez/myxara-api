<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Auth\Events\Registered;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(StoreUserRequest $request)
    {
        $request->validateClient();

        $user = User::create([
            'user_id' => $request->ic,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));
        return [
            'token_type' => 'Bearer',
            'access_token' => $user->createToken($request->deviceId)->plainTextToken,
        ];
    }
}

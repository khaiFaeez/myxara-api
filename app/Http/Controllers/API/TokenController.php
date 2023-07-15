<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthenticationException;

class TokenController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'userId' => 'required',
            'password' => 'required',
            'deviceId' => 'required'
        ]);

        if (!auth()->attempt($request->only('userId', 'password'))) {
            return new AuthenticationException();
        }

        return [
            'token' => $request->user()->createToken($request->deviceId)->plainTextToken
        ];
    }

    public function user(Request $request)
    {
        return $request->user();
    }

    public function destroy(Request $request)
    {
        $request->user()->tokens()->where('name', $request->deviceId)->delete();
        return response('', 204);
    }
}

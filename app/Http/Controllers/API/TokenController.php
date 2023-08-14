<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
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

        $request['user_id'] = $request->userId;

        if (!auth()->attempt($request->only('user_id', 'password'))) {
            return new AuthenticationException();
        }

        return [
            'token_type' => 'Bearer',
            'access_token' => $request->user()->createToken($request->deviceId)->plainTextToken
        ];
    }

    public function user(Request $request)
    {
        // return (new UserResource($request->user()))
        // ->response();
        return response($request->user()->with(['client'])->first(), 200);
    }

    public function destroy(Request $request)
    {
        $request->user()->tokens()->where('name', $request->deviceId)->delete();
        return response('', 204);
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthenticationException;

class TokenController extends Controller
{
    /**
     * @LRDparam ic string|required
     * // either space or pipe
     * @LRDparam password string|password|required
     * // override the default response codes
     * @LRDparam deviceId string|required
     * // override the default response codes
     * @LRDparam responses 200,422
     */
    public function store(Request $request)
    {
        $request->validate([
            'ic' => 'required',
            'password' => 'required',
            'deviceId' => 'required'
        ]);

        $request['user_id'] = $request->ic;

        if (!auth()->attempt($request->only('user_id', 'password'))) {
            return new AuthenticationException();
        }

        return [
            'token_type' => 'Bearer',
            'access_token' => $request->user()->createToken($request->deviceId)->plainTextToken
        ];
    }

    /**
     * @LRDparam ic string|required
     * // either space or pipe
     * @LRDparam responses 200,422
     */
    public function checkId(Request $request)
    {
        $request->validate([
            'ic' => 'required',
        ]);

        if (Client::where('MyKad_SSM', $request->ic)->exists()) {
            $user = User::where('user_id', $request->ic)->first();

            return response([
                'name' => $user->name,
                'ic' => $user->user_id,
                'password_exist' => ($user->password) ? true : false,
                'phone' => $user->client->Mobile_No,
                'email' => $user->email
            ], 200);
        }
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

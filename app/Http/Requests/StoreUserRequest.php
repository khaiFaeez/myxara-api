<?php

namespace App\Http\Requests;

use App\Models\Client;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
use App\Models\User;
use Illuminate\Http\Exceptions\HttpResponseException;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\JsonResponse;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'userId' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
            'deviceId'=>['required'],
            'name'=>['nullable']
        ];
    }

    public function validateClient()
    {
        $userId = $this->userId;

        $clientExists = Client::where('MyKad_SSM', $userId)->first();

        if(!$clientExists){
            throw new HttpResponseException(response()->json([

                'success'   => false,
                'message'   => 'Not yet client',
                'data'      => []

            ]));
        }
        $this->merge(['name'=>$clientExists->Name]);
    }


    public function failedValidation(Validator $validator):JsonResponse
    {

        throw new HttpResponseException(response()->json([

            'success'   => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()

        ]));

    }
}

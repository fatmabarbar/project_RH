<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authentificationController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|max:255',
            'password' => 'required'
        ]);

        $login = $request->only('email', 'password');

        if (!Auth::attempt($login)) {
            return response(['message' => 'Invalid login credential!!'], 401);
        }
        /**
         * @var Utilisateur $utilisateur
         */
        $utilisateur = Auth::utilisateur();
        $token = $utilisateur->createToken($utilisateur->name);

        return response([
            'id' => $utilisateur->id,
            'name' => $utilisateur->name,
            'email' => $utilisateur->email,
            'created_at' => $utilisateur->created_at,
            'updated_at' => $utilisateur->updated_at,
            'token' => $token->accessToken,
            'token_expires_at' => $token->token->expires_at,
        ], 200);
    }

    public function logout(Request $request)
    {
        $this->validate($request, [
            'allDevice' => 'required'
        ]);

        /**
         * @var user $user
         */
        $utilisateur = Auth::utilisateur();
        if ($request->allDevice) {
            $utilisateur->tokens->each(function ($token) {
                $token->delete();
            });
            return response(['message' => 'Logged out from all device !!'], 200);
        }

        $userToken = $utilisateur->token();
        $userToken->delete();
        return response(['message' => 'Logged Successful !!'], 200);
    }
}

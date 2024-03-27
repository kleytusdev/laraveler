<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class AuthenticatedController extends Controller
{
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth()->attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('token')->plainTextToken;

            return new JsonResponse(
                data: ['token' => $token],
                status: Response::HTTP_OK
            );
        } else {
            return new JsonResponse(
                data: ['message' => 'Credenciales inválidas.'],
                status: Response::HTTP_UNAUTHORIZED
            );
        }
    }

    public function destroy()
    {
        dd('logout');
    }
}

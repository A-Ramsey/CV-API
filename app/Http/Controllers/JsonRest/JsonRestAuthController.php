<?php

namespace App\Http\Controllers\JsonRest;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JsonRestAuthController extends Controller
{
    public function index(): JsonResponse
    {
        $email = request()->input('email');
        $password = request()->input('password');
        $authSuccess = Auth::attempt(['email' => $email, 'password' => $password]);
        if (!$authSuccess) {
            return response()->json(['success' => false, 'message' => 'User not found.']);
        }
        $token = request()->user()->createToken('json_rest_api');
        return response()->json(['success' => true, 'message' => 'Token generated.', 'token' => $token->plainTextToken]);
    }
}

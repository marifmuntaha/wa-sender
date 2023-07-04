<?php

namespace App\Http\Controllers\Api\Member;

use App\Http\Controllers\Controller;
use App\Http\Requests\Member\LoginRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        try {
            Auth::guard('member')->attempt($request->all(['username', 'password']), $request->remember);
            return response()->json(['message' => 'Login success!!']);
        }
        catch (Exception $e){
            return response()->json(['message' => $e->getMessage()], 403);
        }
    }
}


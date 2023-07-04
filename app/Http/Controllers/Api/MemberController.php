<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequest;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {

    }
    public function store(MemberRequest $request)
    {
        Member::insert($request->all(['username', 'password', 'fullname', 'email', 'phone']));
        return response()->json(['data' => $request->all()], 201);
    }
}

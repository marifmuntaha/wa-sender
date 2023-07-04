<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected array $data;
    public function dashboard()
    {
        $this->data['breadcrumb'] = [
            ['link' => route('member.dashboard'), 'active' => false, 'icon' => 'icon-display', 'name' => 'Dashboard'],
        ];
        return view('pages.member.dashboard', $this->data);
    }
}

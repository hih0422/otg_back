<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;

class MembersController extends Controller
{

    public function index()
    {
        $data = [
            'name' => 'adsasd'
        ];
        return view('members.index', $data);
    }
}

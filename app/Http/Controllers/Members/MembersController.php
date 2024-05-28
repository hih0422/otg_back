<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use App\Services\Members\GetMembersService;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function __construct(
        protected readonly GetMembersService $membersService
    )
    {

    }
    public function index()
    {
        $data = [
            'members' => $this->membersService->getMembers()
        ];

        return view('members.index', $data);
    }

    public function search(Request $request)
    {
        $type = $request->input('type') ?? null;
        $search = $request->input('search') ?? null;

        $data = [
            'members' => $this->membersService->getMembers($type, $search)
        ];

        return view('members.index', $data);
    }

}

<?php

namespace App\Repositories\Members;

use App\Entities\Members\Members;

class MembersRepository
{
    public function get(?string $type, ?string $search)
    {
        $members = Members::query();
        if ($type && $search) {
            return $members->where($type, 'LIKE', "%{$search}%")->get();
        }

        return $members->get();
    }
}

<?php

namespace App\Services\Members;

use App\Repositories\Members\MembersRepository;
use Illuminate\Database\Eloquent\Collection;

class GetMembersService
{
    public function __construct(
        protected readonly MembersRepository $membersRepository
    )
    {

    }
    public function getMembers(?string $type = null, ?string $search = null): array
    {
        $members = $this->membersRepository->get($type, $search);

        return $members->map(function ($member) {
            return [
                'uid' => $member->uid,
                'name' => $member->name,
                'power' => $member->power,
                'tier' => $member->tier
            ];
        })->toArray();
    }
}

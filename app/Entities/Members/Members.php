<?php

namespace App\Entities\Members;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $uid
 * @property string $name
 * @property int $power
 */
class Members extends Model
{
    protected $table = 'members';

    protected $primaryKey = 'id';

    public $incrementing = true;

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Base extends Model {
    protected $keyType = 'string';
    protected $primaryKey = 'uuid';

    public $incrementing = false;
}

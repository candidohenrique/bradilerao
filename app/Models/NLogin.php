<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NLogin extends Model
{
    protected $connection = 'sqlite_nlogin';
    protected $table = 'nlogin';
    public $timestamps = false;
    protected $guarded = [];
}

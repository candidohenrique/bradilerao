<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GlobalStats extends Model
{
    protected $connection = 'sqlite_stats_users';
    protected $table = 'global_stats';
    public $timestamps = false;
    protected $guarded = [];
}

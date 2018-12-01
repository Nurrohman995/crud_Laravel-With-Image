<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class progdi extends Model
{
    const TABLE_NAME = 'progdi';
    protected $table = 'progdi';
    protected $primary_key = 'kd_progdi';
    public $timestamps = FALSE;
}

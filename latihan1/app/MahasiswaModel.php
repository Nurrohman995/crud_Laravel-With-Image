<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    const TABLE_NAME ="siswa";
    protected $table ="siswa";
    protected $primary_key = "id";
    public $timestamps = False;
}

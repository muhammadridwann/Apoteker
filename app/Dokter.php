<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table='dokter';
    public $timestamps=false;
    protected $primaryKey = 'KodeDkt';
}

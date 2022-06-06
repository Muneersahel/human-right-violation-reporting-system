<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voice extends Model
{
    protected $table='voices';
    public $primaryKey='id';
    protected $guarded = [];
    public $timestamps = false;
}

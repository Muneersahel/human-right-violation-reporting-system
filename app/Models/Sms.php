<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
    protected $table='sms';
    public $primaryKey='id';
    protected $guarded = [];
    public $timestamps = false;
}

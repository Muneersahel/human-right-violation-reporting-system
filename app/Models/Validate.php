<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Validate extends Model
{
    protected $table = "validates";
    public $primaryKey='id';
    protected $guarded = [];
}
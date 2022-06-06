<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installation extends Model
{
    protected $table = "installations";
    public $primaryKey='id';
    protected $guarded = [];
}
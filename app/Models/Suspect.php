<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suspect extends Model
{
    protected $table = "suspects";
    public $primaryKey='id';
    protected $guarded = [];
}

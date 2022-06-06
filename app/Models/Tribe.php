<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tribe extends Model
{
    protected $table = 'tribes';
    public $primaryKey='id';
    protected $guarded = [];
    protected $cast=['tribe_name'=>'array'];
}

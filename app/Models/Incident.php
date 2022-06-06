<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    // use HasFactory;

    //Defining primary key variable
    protected $table='incidents';
    public $primaryKey='id';
    public $guarded=[];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
   //  use HasFactory;

     //Defining primary key variable
     protected $table='customers';
     public $primaryKey='id';
      public $guarded=[];
 
     //The attributes that are mass assignable.
   //   protected $fillable = [
   //     //
   //   ];
}

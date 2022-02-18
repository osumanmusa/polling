<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grouppicture extends Model
{
      use HasFactory;

     protected $fillable = [];


     protected $table = 'group_picture';
     public function group($id)
     {

     }
}     

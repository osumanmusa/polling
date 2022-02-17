<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class polling extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        
    ];
       public function Code(){
        return $this->belongsTo(polling::class);
    }


    protected $table ='polling_station';    
         public function polling_station($id){
    }


}

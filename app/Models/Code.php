<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    use HasFactory;
     use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
       
        
    ];

    protected $table ='Code';    
        public function coder(){
        return $this->belongsTo(polling::class);
    }

    public function polling(){
        return $this->belongsTo(polling::class);
    }


}

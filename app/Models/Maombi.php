<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maombi extends Model
{
    use HasFactory;

    protected $table='maombis';
    protected $fillable=[
        'asset_name',
        'user_id',
        'status',
      
    ];

   

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    

}

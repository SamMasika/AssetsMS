<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table='staffs';
    protected $fillable=[
        'name',
        'email',
        'phone',
        'depart_id',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class,'depart_id','id');
    }

    
    public function asset()
    {
        return $this->hasMany(Asset::class);
    }

}

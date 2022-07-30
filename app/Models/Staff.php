<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table='staffs';
    protected $fillable=[
        'fname',
        'lname',
        'email',
        'phone',
        'depart_id',
    ];

    public function asset()
    {
        return $this->hasMany(Asset::class,'id','staff_id');
    }

    public function staff()
    {
        return $this->belongsTo(Asset::class,'assets_id','id');
    }


    public function department()
    {
        return $this->belongsTo(Department::class,'depart_id','id');
    }
}

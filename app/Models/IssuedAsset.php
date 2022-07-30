<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssuedAsset extends Model
{
    use HasFactory;

    protected $table='issued_assets';
    protected $fillable=[
        'staff_id',
        'assets_id',
        
    ];

    public function staff()
    {
        return $this->belongsTo(Staff::class,'staff_id','id');
    }

    public function asset()
    {
        return $this->belongsTo(Asset::class,'assets_id','id');
    }
}

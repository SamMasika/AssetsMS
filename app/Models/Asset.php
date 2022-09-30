<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    
    protected $table='assets';
    protected $fillable=[
        'name',
        'user_id',
        'vendor_id',
        'staff_id',
        'status',
        'flug',
        'brand_id',
        'cate_id',
        'depart_id',
        'barcodes',
        'asset_code',
        'quantity',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class,'vendor_id','id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'cate_id','id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class,'depart_id','id');
    }

}

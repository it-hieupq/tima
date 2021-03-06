<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoanhThu extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function hopdong(){
        return $this->belongsTo(HopDong::class);
    }
}

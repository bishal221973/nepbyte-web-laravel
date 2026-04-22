<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandPortfolio extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function service(){
        return $this->belongsTo(BrandingService::class,'branding_service_id','id');
    }
}

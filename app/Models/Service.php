<?php

namespace App\Models;

use App\Models\ServiceType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        "service_name"
    ];

    public function serviceTypes(){
        return $this->hasMany(ServiceType::class);
    }

}

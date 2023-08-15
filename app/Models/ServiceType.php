<?php

namespace App\Models;

use App\Models\Service;
use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceType extends Model
{
    use HasFactory;

    protected $fillable = [
        "service_id",
        "name"
    ];

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function applications(){
        return $this->hasMany(Application::class);
    }
    
}

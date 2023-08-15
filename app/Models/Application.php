<?php

namespace App\Models;

use App\Models\User;
use App\Models\ServiceType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        "service_type_id",
        "user_id",
        "requirements"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function serviceType(){
        return $this->belongsTo(ServiceType::class);
    }
}

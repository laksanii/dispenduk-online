<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ServiceType;

class PageController extends Controller
{
    public function dashboard(){
        return view('dispenduk.dashboard', [
            'services' => Service::get()
        ]);
    }

    public function jenisLayanan($layanan){
        $service = Service::where('slug', $layanan)->first();
        $id = $service->id;
        $jenis_layanan = ServiceType::where("service_id", $id)->get();

        return view("dispenduk.jenisLayanan", [
            "service_types" => $jenis_layanan
        ]);
    }

    public function detailLayanan($jenis_layanan){
        $jenis_layanan = ServiceType::where('slug', $jenis_layanan)->first();
        $slug = [];

        foreach(json_decode($jenis_layanan->requirements) as $value){
            $slug[] = Str::slug($value, "_");
        }
        
        return view('dispenduk.detailLayanan', [
            'requirements' => json_decode($jenis_layanan->requirements),
            'requirements_name' => $slug
        ]);
    }
}

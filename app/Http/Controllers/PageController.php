<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\ServiceType;
use Carbon\Carbon;

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
            'requirements_name' => $slug,
            'service_type_id' => $jenis_layanan->id
        ]);
    }

    public function statistic(){
        $statistic = Application::whereDate('created_at', Carbon::today())->get();
        $group = $statistic->groupBy('service_type_id');
        $service_types = ServiceType::get();
        return view('dispenduk.statistik', [
            'application_count' => $statistic->count(),
            'group' => $group,
            'service_types' => $service_types
        ]);
    }
}

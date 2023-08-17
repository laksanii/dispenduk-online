<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Application;
use App\Models\ServiceType;
use Carbon\CarbonImmutable;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AdminLoginRequest;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    
    public function authentication(AdminLoginRequest $request){
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended('/admin');
    }

    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
    
    
    public function dashboard(){
        $applications = Application::get();

        $now = CarbonImmutable::now();
        
        $today = Application::whereDate('created_at', Carbon::today())->get();
        $current_week = Application::whereBetween('created_at', [$now->startOfWeek(), $now->endOfWeek()])->get();
        $current_month = Application::whereMonth('created_at', $now->format('n'))->get();
        
        $statistic = Application::whereDate('created_at', Carbon::today())->get();
        $group = $statistic->groupBy('service_type_id');
        $service_types = ServiceType::get();

        return view('admin.dashboard', [
            "today" => $today->count(),
            "week" => $current_week->count(),
            "month" => $current_month->count(),
            'group' => $group,
            'service_types' => $service_types,
        ]);
    }

    public function application(){
        return view('admin.pengajuan', [
            'applications' => Application::simplePaginate(15),
        ]);
    }

    public function detailPengajuan($id){
        $applications = Application::find($id);
        $jenis_layanan = ServiceType::find($applications->serviceType->id);
        $slug = [];

        foreach(json_decode($jenis_layanan->requirements) as $value){
            $slug[] = Str::slug($value, "_");
        }
        
        return view('admin.detailPengajuan', [
            'data' => $applications,
            'requirements' => json_decode($jenis_layanan->requirements),
            'requirements_name' => $slug,
            'requirements_file' => json_decode($applications->requirements)
        ]);
    }

    public function download(Request $request){
        // return $request->url;
        $file_name = explode('.', $request->url);
        $ext = $file_name[count($file_name)-1];
        return Storage::download($request->url, 'berkas persyaratan '. $request->name_file . '.' .$ext);
    }

    public function approve($id){
        $app = Application::find($id);
        $app->status = "Pengajuan disetujui";
        $app->save();

        return redirect()->back()->with('success', 'Pengajuan berhasil disetujui');
    }
    
    public function reject($id){
        $app = Application::find($id);
        $app->status = "Pengajuan ditolak";
        $app->save();

        return redirect()->back()->with('reject', 'Pengajuan telah ditolak');
    }
}
<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Application;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller
{
    public function storeApplication(Request $request)
    {
        $request->validate([
            'service_type_id' => 'required',
            'requirements.*.*' => 'mimes:png,jpg,pdf,jpeg'
        ],[
            'requirements.*.*.mimes' => 'Format file harus salah satu dari png, jpg, pdf, jpeg'
        ]);

        try {
            $requirements = [];
            foreach ($request->file('requirements') as $key => $value) {
                foreach ($value as $file) {
                    $requirements[$key] = $file->store('requirements/' . $key);
                }
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('failure', 'Cek kembali data yang dikirim');
        }


        $newKK_application = Application::Create(array_merge(
            $request->toArray(),
            ['requirements' => json_encode($requirements)],
            ["user_id" => auth()->user()->id]
        ));

        return redirect()->back()->with('message', 'Pengajuan berhasil dikirim');
    }

    public function statistik(){
        $statistic = Application::whereDate('created_at', Carbon::today())->get();
        $group = $statistic->groupBy('service_type_id');
        $service_types = ServiceType::get();

        return response()->json([
            'group' => $group,
            'service_types' => $service_types
        ]);
    }
}

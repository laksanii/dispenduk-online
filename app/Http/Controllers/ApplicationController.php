<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller
{
    public function storeApplication(Request $request){

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'service_type_id' => 'required',
            'requirements' => 'required',
            'requirements.*' => 'required|mimes:png,jpg,pdf,jpeg'
        ]);

        if($validator->fails()){
            return $validator->errors();
        }
        
        $requirements = [];
        foreach($request->file('requirements') as $key => $value){
            $requirements[$key] = $value->store('requirements/'.$key);
        }

        $newKK_application = Application::Create(array_merge(
            $request->toArray(),
            ['requirements'=> json_encode($requirements)]
        ));

        return $newKK_application;
    }
}

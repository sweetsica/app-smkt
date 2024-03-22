<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function light(){
        $data = Test::latest()->get()->first();
        // return response()->json($data,200);
        return view('test.light',compact('data'));
    }
    public function switchLight(Request $request){
        // dd($request);
        $data=Test::create($request->all());
        $data->save();
        return redirect()->route('light');
    }
}

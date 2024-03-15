<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sample;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SampleController extends Controller
{
    public function index(){
        $data = Sample::all();
        return response()->json($data,200);
    }
    public function collectData(Request $request){
        Log::info('Data from contact form 7: '.$request);
        return response()->json($request,200);
    }
}

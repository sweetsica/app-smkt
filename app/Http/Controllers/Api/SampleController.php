<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sample;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index(){
        $data = Sample::all();
        return response()->json($data,200);
    }
}

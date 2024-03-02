<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index(){
        $data['sample_customers'] = Sample::where('type','=','1')->get();
        $data['sample_groups'] = Sample::where('type','=','2')->get();
        $data['sample_themes'] = Sample::where('type','=','3')->get();
        return view('sample.index',compact('data'));
    }

    public function create()
    {

    }

    public function store(Request $request){
        Sample::create($request->all());
        return redirect()->route('index');
    }

    public function update(Request $request){
        $task = Sample::find($request->id);
        if (!$task) {
            return response()->json('failed');
        }

        return response()->json($task->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
}

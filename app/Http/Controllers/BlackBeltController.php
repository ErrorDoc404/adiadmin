<?php

namespace App\Http\Controllers;

use App\Models\BlackBelt;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlackBeltController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blackbelt = BlackBelt::orderBy('id', 'asc')
                    ->where('instructor','no')
                    ->get();
        return view('blackbelt.index',compact('blackbelt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $year = [];
        $current_year = Carbon::now()->year;
        for($i = $current_year ; $i >= 1950 ; $i-- ){
            $year[] = $i;
        }

        return view('blackbelt.create',compact('year'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blackbelt = new BlackBelt();
        $blackbelt->full_name = $request->fullname;
        $blackbelt->dan_list_id = $request->dan;
        $blackbelt->year = $request->year;

//        if(Input::hasFile('name')){
//
//            $file = Input::file('name');
//            $file->move('uploads/instructors', $file->getClientOriginalName());
//            $blackbelt->image_url = 'uploads/instructors/'.$file->getClientOriginalName();
//        }

        $blackbelt->created_by = Auth::user()->name;
        $blackbelt->modified_by = Auth::user()->name;
        $blackbelt->save();
        return redirect()->route('blackbelt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlackBelt  $blackBelt
     * @return \Illuminate\Http\Response
     */
    public function show(BlackBelt $blackBelt)
    {
        return false;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlackBelt  $blackBelt
     * @return \Illuminate\Http\Response
     */
    public function edit(BlackBelt $blackBelt)
    {
        return false;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlackBelt  $blackBelt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlackBelt $blackBelt)
    {
        return false;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlackBelt  $blackBelt
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlackBelt $blackBelt)
    {
        return false;
    }
}

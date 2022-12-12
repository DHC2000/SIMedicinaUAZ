<?php

namespace App\Http\Controllers;

use App\Models\Semeste;
use Illuminate\Http\Request;

class SemesteController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $semestre= request()->except('_token');
        echo response()->json($semestre);
        Semeste::insert($semestre);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Semeste  $semeste
     * @return \Illuminate\Http\Response
     */
    public function show(Semeste $semeste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Semeste  $semeste
     * @return \Illuminate\Http\Response
     */
    public function edit(Semeste $semeste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Semeste  $semeste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Semeste $semeste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Semeste  $semeste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semeste $semeste)
    {
        //
    }
}

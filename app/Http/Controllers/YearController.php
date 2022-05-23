<?php

namespace App\Http\Controllers;

use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class YearController extends Controller
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
        if(! Gate::allows('confirm-principal'))
        {
            abort(403);
        }

        $years = Year::All();

        if($years->isNotEmpty() == true && $years->last()->isOpen == true)
        {
            abort(403);
        }

        Year::create([
            'number' => sizeof($years) + 1,
        ]);
        return redirect()->back();
    }

    public function close()
    {
        if(! Gate::allows('confirm-principal'))
        {
            abort(403);
        }

        $years = Year::All();

        if($years->isNotEmpty() == true && $years->last()->isOpen == true)
        {
            $lastYear = $years->last();
            $closeYear['isOpen'] = false;
            $lastYear->update($closeYear);
            return redirect()->back();
        }

        return abort(403);

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function show(Year $year)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function edit(Year $year)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Year $year)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function destroy(Year $year)
    {
        //
    }
}

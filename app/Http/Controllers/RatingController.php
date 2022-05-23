<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class RatingController extends Controller
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
        if(! Gate::allows('confirm-master')){
            abort(403);
        }

        $ratings = Rating::all();
        return view('ratings.index', compact('ratings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(! Gate::allows('confirm-master')){
            abort(403);
        }

        return view('ratings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(! Gate::allows('confirm-master')){
            abort(403);
        }

        $newrating = [
            'number' => $request['number'],
        ];

        Rating::create($newrating);
        return redirect()->route('ratings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show(Rating $rating)
    {
        if(! Gate::allows('confirm-master')){
            abort(403);
        }

        return view('ratings.show', compact('rating'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function edit(Rating $rating)
    {
        if(! Gate::allows('confirm-master')){
            abort(403);
        }

        return view('ratings.edit', compact('rating'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rating $rating)
    {
        if(! Gate::allows('confirm-master')){
            abort(403);
        }

        $editrating = [
            'number' => $request['number'],
        ];
        $rating->update($editrating);
        return redirect()->route('ratings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rating $rating)
    {
        if(! Gate::allows('confirm-master')){
            abort(403);
        }

        $rating->delete();
        return redirect()->route('ratings.index');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::get();
        echo json_encode($movies);
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
    //print_r($request->all());
       $movie = new Movie();
       $movie->name = $request->input('name');
       $movie->description = $request->input('description');
       $movie->genre = $request->input('genre');
       $movie->year = $request->input('year');
       $movie->duration = $request->input('duration');
       $movie->save();
       echo ('se ha guardado correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(movie $movie)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $movie)
    {
        $movier = Movie::find($movie);
       $movier->name = $request->input('name');
       $movier->description = $request->input('description');
       $movier->genre = $request->input('genre');
       $movier->year = $request->input('year');
       $movier->duration = $request->input('duration');
       $movier->save();
       echo ('se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy( $movie)
    {
        $movier = Movie::find($movie);
        $movier->delete();
    }
}

<?php

namespace App\Http\Controllers;

use App\Gemme;
use Illuminate\Http\Request;

class GemmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gemmes = Gemme::all();
        return view("gemme.index", ["gemmes" => $gemmes]);
    }

    public function indexAdmin(){
        $gemmes = Gemme::all();
        return view("gemme.admin", ["gemmes" => $gemmes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gemme = new Gemme();
        return view('gemme.create', ['gemme' => $gemme]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donnee = $request->all();
        $gemme = new Gemme();
        $gemme -> fill($donnee);
        $gemme -> save();
        // $gemme -> nom = $request->get('nom');
        return redirect()->action('GemmeController@indexAdmin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gemme $gemme)
    {
        return view("gemme.show", ['gemme' => $gemme]);
    }
    
    public function adminInfo(Gemme $gemme)
    {
        return view("gemme.adminInfo", ['gemme' => $gemme]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gemme $gemme)
    {
        return view('gemme.edit', ['gemme' => $gemme]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gemme $gemme)
    {
        $donnee = $request->except(['password']);
        if ($request->get('password')){
            $gemme -> password = $request->get('password');
        }
        $gemme->fill($donnee);
        $gemme->save();
        return redirect()->action('GemmeController@adminInfo', $gemme);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gemme $gemme)
    {
        $gemme->delete();
        return redirect()->action('GemmeController@indexAdmin');
    }
}

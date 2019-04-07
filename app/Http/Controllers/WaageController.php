<?php

namespace App\Http\Controllers;

use App\Waage;
use App\Mill;
use Illuminate\Http\Request;

class WaageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $waagen = Waage::all();

        return view(
            'waagen.index',
            ['waagen' => $waagen]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('waagen.create', compact("request"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = request()->validate([
            'name' => 'required',
            'beschreibung' => 'required',
            'mill_id' => 'required'
        ]);

        Waage::create( $validated );

        return redirect("/muehlen")->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Waage  $waage
     * @return \Illuminate\Http\Response
     */
    public function show(Waage $waagen)
    {
        return view("waagen.show", compact("waagen"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Waage  $waage
     * @return \Illuminate\Http\Response
     */
    public function edit(Waage $waagen)
    {

        $muehlen = Mill::all();

        return view("waagen.edit", compact("waagen", "muehlen"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Waage  $waage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Waage $waagen)
    {
        $waagen->update([
            'name' => request('name'),
            'beschreibung' => request('beschreibung'),
            'mill_id' => request('mill_id')
        ]);

        return redirect("/waagen");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Waage  $waage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Waage $waagen)
    {
        $waagen->delete();

        return redirect("/waagen")->with('success', 'Mühle gelöscht');
    }
}

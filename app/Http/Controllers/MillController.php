<?php

namespace App\Http\Controllers;

use App\Mill;
use Illuminate\Http\Request;

class MillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $mills= Mill::all();

        return view(
            'muehlen.index',
            ['mills' => $mills]
        );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('muehlen.create');
    }

    public function store(Request $request)
    {

        Mill::create([
            'title' => request('title'),
            'description' => request('description')
        ]);

        return redirect("/muehlen")->with('success', 'Stock has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mill  $mill
     * @return \Illuminate\Http\Response
     */
    public function show(Mill $muehlen)
    {
        return view("muehlen.show", compact("muehlen"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mill  $mill
     * @return \Illuminate\Http\Response
     */
    public function edit( Mill $muehlen )
    {

        return view("muehlen.edit", compact("muehlen"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mill  $mill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mill $muehlen)
    {

        $muehlen->update([
            'title' => request('title'),
            'description' => request('description')
        ]);

        return redirect("/muehlen");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mill  $mill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mill $muehlen)
    {

        $muehlen->delete();

        return redirect("/muehlen")->with('success', 'Mühle gelöscht');

    }
}

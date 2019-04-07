<?php

namespace App\Http\Controllers;

use App\Mill;
use App\User;
use App\Favmills;
use Illuminate\Http\Request;

class FavmillsController extends Controller
{

    public function index()
    {

        if( $user = \Auth::user())
        {

            $user = \Auth::user();

            # get all mills, that user hasn't added to favorites

            $mills = array();

            foreach ($user->mills as $mill) {
                array_push($mills, $mill->id);
            }

            # get all other mills, that user might want to add to favs

            $not_favmills = Mill::whereNotIn('id', $mills )->get();

        } else {

            // $user = User::findOrFail("99");
            dd("user not logged in");

        }

        return view(
            'favmills.index',
            compact("user", "not_favmills")
        );
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

        $validated = request()->validate([
            'user_id' => 'required',
            'mill_id' => 'required'
        ]);

        Favmills::create( $validated );

        return redirect("/favmills");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Favmills  $favmills
     * @return \Illuminate\Http\Response
     */
    public function show(Favmills $favmill)
    {
        dd($favmill);
        // dd($favmills->mill_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Favmills  $favmills
     * @return \Illuminate\Http\Response
     */
    public function edit(Favmills $favmills)
    {
        dd($favmills);
        return view("favmills.edit", compact("favmills"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Favmills  $favmills
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favmills $favmills)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Favmills  $favmills
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favmills $favmill)
    {

        $favmill->delete();

        return redirect("/favmills")->with('success', 'Favmill deleted');

    }
}

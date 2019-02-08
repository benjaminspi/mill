<?php

namespace App\Http\Controllers;

use App\Mill;
use Illuminate\Http\Request;

class MillController extends Controller
{

    public function index() {
        $mills= Mill::all();

        return view(
            'muehlen.index',
            ['mills' => $mills]
        );
    }

    public function create() {
        return view('muehlen.create');
    }

    public function store(Request $request) {

        $validated = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Mill::create( $validated );

        return redirect("/muehlen")->with('success', 'Stock has been added');
    }

    public function show(Mill $muehlen) {
        return view("muehlen.show", compact("muehlen"));
    }

    public function edit( Mill $muehlen ) {
        return view("muehlen.edit", compact("muehlen"));
    }

    public function update(Request $request, Mill $muehlen) {
        $muehlen->update([
            'title' => request('title'),
            'description' => request('description')
        ]);

        return redirect("/muehlen");
    }

    public function destroy(Mill $muehlen) {
        $muehlen->delete();

        return redirect("/muehlen")->with('success', 'Mühle gelöscht');
    }
}

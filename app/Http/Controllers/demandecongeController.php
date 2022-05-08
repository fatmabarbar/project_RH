<?php

namespace App\Http\Controllers;

use App\Models\demandeconge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class demandecongeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //
        //return cellule::all();
        if (Request::has('trashed')) {
            $demandeconges = demandeconge::onlyTrashed()
                ->get();
        } else {
            $demandeconges = demandeconge::get();
        }

        return view('demandeconges', compact('demandeconges'));
        $demandeconges = DB::table('demandeconges')->get();

        return  response($demandeconges);
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
        $demandeconge = array(
            //'id' => '55',
            'DateDemande' => $request->input('DateDemande'),
            'typeconge' => $request->input('typeconge'),
            'solde' => $request->input('solde'),
            'datedebut' => $request->input('datedebut'),
            'datedernier' => $request->input('datedernier'),
            'duree' => $request->input('duree')

        );
        $demandeconge = demandeconge::insert($demandeconge);
        return response($demandeconge, 201);
    }

    /**
     * Display the specified resource.
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return demandeconge::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\demandeconge  $demandeconge
     * @return \Illuminate\Http\Response
     */
    public function edit(demandeconge $demandeconge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param  string $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $demandeconge = array(
            //'id' => '55',
            'DateDemande' => $request->input('DateDemande'),
            'typeconge' => $request->input('typeconge'),
            'solde' => $request->input('solde'),
            'datedebut' => $request->input('datedebut'),
            'datedernier' => $request->input('datedernier'),
            'duree' => $request->input('duree'),
            'etat' => $request->input('etat'),
            'decision' => $request->input('decision')

        );
        $demandecongeresult = demandeconge::where('id', '=', $id)->update($demandeconge);
        return 'true';
    }

    /**
     * Remove the specified resource from storage.
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        demandeconge::find($id)->delete();

        return redirect()->back();
        //return demandeconge::destroy($id);
    }
    public function restore($id)
    {
        demandeconge::withTrashed()->find($id)->restore();

        return redirect()->back();
    }
}

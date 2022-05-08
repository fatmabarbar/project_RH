<?php

namespace App\Http\Controllers;

use App\Models\cellule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class celluleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return cellule::all();
        $cellules = DB::table('P_cellule')->get();

        return  response($cellules);
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
        //return cellule::create($request->all());
        $cellule = array(
            //'id' => '55',
            'code' => $request->input('code'),
            'Libelle' => $request->input('Libelle'),
            'IsDefault' => $request->input('IsDefault'),
            'j_ddm' => $request->input('j_ddm'),
            'id_CelluleParent' => $request->input('id_CelluleParent')

        );
        $cellule = cellule::insert($cellule);
        return response($cellule, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return cellule::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cellule  $cellule
     * @return \Illuminate\Http\Response
     */
    public function edit(cellule $cellule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        /* $cellule = cellule::find($id);
        $cellule->update($request->all());
        return $cellule;*/
        $cel = array(
            //'id' => '55',
            'code' => $request->input('code'),
            'Libelle' => $request->input('Libelle'),
            'IsDefault' => $request->input('IsDefault'),
            'j_ddm' => $request->input('j_ddm'),
            'id_CelluleParent' => $request->input('id_CelluleParent')

        );
        $celluleresult = cellule::where('id', '=', $id)->update($cel);
        return 'true';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return cellule::destroy($id);
    }
}

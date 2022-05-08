<?php

namespace App\Http\Controllers;

use App\Models\typeuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class typeuserController extends Controller
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
        $typeusers = DB::table('E_TypeUser')->get();

        return  response($typeusers);
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
        //return typeuser::create($request->all());
        //
        //return cellule::create($request->all());
        $typeuser = array(
            //'id' => '55',
            'code' => $request->input('code'),
            'libelle' => $request->input('libelle')




        );
        $typeuser = typeuser::insert($typeuser);
        return response($typeuser, 201);
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
        return typeuser::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\typeuser  $typeuser
     * @return \Illuminate\Http\Response
     */
    public function edit(typeuser $typeuser)
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
    public function update(Request $request, $id)
    {
        //
        /*$typeuser = typeuser::find($id);
        $typeuser->update($request->all());
        return $typeuser;*/
        $tu = array(
            //'id' => '55',
            'code' => $request->input('code'),
            'libelle' => $request->input('libelle')

        );
        $typeusersresult = typeuser::where('id', '=', $id)->update($tu);
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
        return typeuser::destroy($id);
    }
}

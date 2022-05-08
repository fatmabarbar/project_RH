<?php

namespace App\Http\Controllers;

use App\Models\utilisateur;
use Illuminate\Http\Request;

class utilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return utilisateur::all();
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
        $user = array(
            //'id' => '55',
            'nomPrenom' => $request->input('nomPrenom'),
            'code' => $request->input('code'),
            'username' => $request->input('username'),
            // 'idType' => $request->input('idType'),
            'j_ddm' => $request->input('j_ddm'),
            //'idCellule' => $request->input('idCellule'),
            'tel' => $request->input('tel'),
            'login' => $request->input('login'),
            'psw' => $request->input('psw'),
            'mail' => $request->input('mail'),
            'is_beneficiaire' => $request->input('is_beneficiaire'),
            'is_validateur' => $request->input('is_validateur'),
            'active' => $request->input('active'),
            'allowChangeStation' => $request->input('allowChangeStation'),
            'allowChangeExercice' => $request->input('allowChangeExercice'),
            'AllowChangePrix' => $request->input('AllowChangePrix'),
        );
        $utilisateur = utilisateur::insert($user);
        return response($utilisateur, 201);
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
        return utilisateur::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function edit(utilisateur $utilisateur)
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
        /* $utilisateur = utilisateur::find($id);
        $utilisateur->update($request->all());
        return $utilisateur;*/
        $user = array(
            //'id' => '55',
            'nomPrenom' => $request->input('nomPrenom'),
            'code' => $request->input('code'),
            'username' => $request->input('username'),
            'idType' => $request->input('idType'),
            'j_ddm' => $request->input('j_ddm'),
            'idCellule' => $request->input('idCellule'),
            'tel' => $request->input('tel'),
            'login' => $request->input('login'),
            'psw' => $request->input('psw'),
            'mail' => $request->input('mail'),
            'is_beneficiaire' => $request->input('is_beneficiaire'),
            'is_validateur' => $request->input('is_validateur'),
            'active' => $request->input('active'),
            'allowChangeStation' => $request->input('allowChangeStation'),
            'allowChangeExercice' => $request->input('allowChangeExercice'),
            'AllowChangePrix' => $request->input('AllowChangePrix'),


        );
        $userresult = utilisateur::where('id', '=', $id)->update($user);
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
        return utilisateur::destroy($id);
    }
    public function login($email)
    {
        return utilisateur::where('mail', '=', $email)->get();
    }
}

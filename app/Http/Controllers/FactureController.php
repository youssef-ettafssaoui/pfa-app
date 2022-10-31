<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factures = Facture::orderBy('id', 'desc')->paginate(10);

        return view('admin.facture.index', compact('factures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.facture.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Facture::create($request->all());

        return redirect()->route('facture.index')->with('message', 'Facture crée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facture = Facture::find($id);
        return view('admin.facture.model', compact('facture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facture = Facture::find($id);
        return view('admin.facture.edit', compact('facture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validateUpdate($request, $id);
        $data = $request->all();
        $facture = Facture::find($id);
        $facture->update($data);

        return redirect()->route('facture.index')->with('message', 'facture modifié avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function validateStore($request)
    {
        return  $this->validate($request, [
            'date' => 'required',
            'motif' => 'required',
            'total' => 'required'
        ]);
    }

    public function validateUpdate($request, $id)
    {
        return $this->validate($request, [
            'date' => 'required',
            'motif' => 'required',
            'total' => 'required'
        ]);
    }
}
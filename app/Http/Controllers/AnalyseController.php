<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Analyse;

class AnalyseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analyses  = Analyse::latest()->limit(10)->get();
        return view('admin.analyses.index', compact('analyses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.analyses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateStore($request);
        $data = $request->all();
        Analyse::create($data);

        return redirect()->route('analyses.index')->with('message', 'Analyse ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $analyse = Analyse::find($id);
        return view('admin.analyses.edit', compact('analyse'));
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
        $analyse = Analyse::find($id);
        $analyse->update($data);

        return redirect()->route('analyses.index')->with('message', 'Analyse modifiée avec succès !');
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
            'nom' => 'required|unique:analyses',
            'delai' => 'required',
            'cleB' => 'required',
            'montant' => 'required'
        ]);
    }

    public function validateUpdate($request, $id)
    {
        return $this->validate($request, [
            'nom' => 'required',
            'delai' => 'required',
            'cleB' => 'required',
            'montant' => 'required'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Medicament;
use Illuminate\Http\Request;

class MedicamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicaments  = Medicament::latest()->limit(10)->get();
        return view('admin.medicament.index', compact('medicaments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.medicament.create');
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
        Medicament::create($data);

        return redirect()->route('medicament.index')->with('message', 'Medicament ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicament = Medicament::find($id);
        return view('admin.medicament.show', compact('medicament'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicament = Medicament::find($id);
        return view('admin.medicament.edit', compact('medicament'));
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
        $medicament = Medicament::find($id);
        $medicament->update($data);

        return redirect()->route('medicament.index')->with('message', 'Medicament modifié avec succès !');
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
            'nom' => 'required',
            'status' => 'required',
            'presentation' => 'required',
            'prix' => 'required',
            'indications' => 'required'
        ]);
    }

    public function validateUpdate($request, $id)
    {
        return $this->validate($request, [
            'nom' => 'required',
            'status' => 'required',
            'presentation' => 'required',
            'prix' => 'required',
            'indications' => 'required'
        ]);
    }
}
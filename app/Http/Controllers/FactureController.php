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
        $data['patient_name'] = $request->patient_name;
        $data['patient_email'] = $request->patient_email;
        $data['patient_mobile'] = $request->patient_mobile;
        $data['medecin_name'] = $request->medecin_name;
        $data['facture_number'] = $request->facture_number;
        $data['facture_date'] = $request->facture_date;
        $data['sub_total'] = $request->sub_total;
        $data['discount_type'] = $request->discount_type;
        $data['discount_value'] = $request->discount_value;
        $data['vat_value'] = $request->vat_value;
        $data['shipping'] = $request->shipping;
        $data['total_due'] = $request->total_due;

        $facture = Facture::create($data);

        $details_list = [];
        for ($i = 0; $i < count($request->objet); $i++) {
            $details_list[$i]['objet'] = $request->objet[$i];
            $details_list[$i]['nombre_personnes'] = $request->nombre_personnes[$i];
            $details_list[$i]['prix_personne'] = $request->prix_personne[$i];
            $details_list[$i]['row_sub_total'] = $request->row_sub_total[$i];
        }

        $details = $facture->details()->createMany($details_list);

        if ($details) {
            return redirect()->route('facture.index')->with([
                'message' => 'Facture crée avec succès !',
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => 'Erreur ! Impossible de créer cette Facture !',
                'alert-type' => 'danger'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facture = Facture::findOrFail($id);
        return view('facture.show', compact('facture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facture = Facture::findOrFail($id);
        return view('facture.edit', compact('facture'));
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
        $facture = Facture::whereId($id)->first();

        $data['patient_name'] = $request->patient_name;
        $data['patient_email'] = $request->patient_email;
        $data['patient_mobile'] = $request->patient_mobile;
        $data['medecin_name'] = $request->medecin_name;
        $data['facture_number'] = $request->facture_number;
        $data['facture_date'] = $request->facture_date;
        $data['sub_total'] = $request->sub_total;
        $data['discount_type'] = $request->discount_type;
        $data['discount_value'] = $request->discount_value;
        $data['vat_value'] = $request->vat_value;
        $data['shipping'] = $request->shipping;
        $data['total_due'] = $request->total_due;

        $facture->update($data);

        $facture->details()->delete();

        $details_list = [];
        for ($i = 0; $i < count($request->objet); $i++) {
            $details_list[$i]['objet'] = $request->objet[$i];
            $details_list[$i]['nombre_personnes'] = $request->nombre_personnes[$i];
            $details_list[$i]['prix_personne'] = $request->prix_personne[$i];
            $details_list[$i]['row_sub_total'] = $request->row_sub_total[$i];
        }

        $details = $facture->details()->createMany($details_list);

        if ($details) {
            return redirect()->route('facture.index')->with([
                'message' => 'Facture a été modifiée avec succès !',
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => 'Erreur ! Impossible de modifier cette Facture !',
                'alert-type' => 'danger'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facture = Facture::findOrFail($id);
        if ($facture) {
            $facture->delete();
            return redirect()->route('facture.index')->with([
                'message' => 'La Facture a été supprimé avec succès !',
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->route('facture.index')->with([
                'message' => 'Erreur ! Impossible de supprimer la Facture',
                'alert-type' => 'danger'
            ]);
        }
    }

    public function print($id)
    {
        $facture = Facture::findOrFail($id);
        return view('facture.print', compact('facture'));
    }
}
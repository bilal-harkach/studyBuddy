<?php

namespace App\Http\Controllers;

use App\Models\Samenvatting;
use Illuminate\Http\Request;

class SamenvattingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $samenvattingen = Samenvatting::latest()->get();
        return view('samenvattingen.index', compact('samenvattingen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('samenvattingen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titel' => 'required',
            'vak' => 'required',
            'inhoud' => 'required',
        ]);

        Samenvatting::create([
            'titel' => $request->titel,
            'vak' => $request->vak,
            'inhoud' => $request->inhoud,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('samenvattingen.index')->with('success', 'Samenvatting toegevoegd!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Samenvatting $samenvatting)
    {
        return view('samenvattingen.show', compact('samenvatting'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Samenvatting $samenvatting)
    {
        return view('samenvattingen.edit', compact('samenvatting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Samenvatting $samenvatting)
    {
        $request->validate([
            'titel' => 'required',
            'vak' => 'required',
            'inhoud' => 'required',
        ]);

        $samenvatting->update($request->only('titel', 'vak', 'inhoud'));

        return redirect()->route('samenvattingen.show', $samenvatting)->with('success', 'Samenvatting bijgewerkt!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Samenvatting $samenvatting)
    {
        $samenvatting->delete();
        return redirect()->route('samenvattingen.index')->with('success', 'Samenvatting verwijderd.');
    }
}

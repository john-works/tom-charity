<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

          return view('donations.create');
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
            'donor_name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1000',
            'donation_type' => 'required|string',
            'date' => 'required|date',
        ]);

        Donate::create($request->all());

        return redirect()->route('donations.index')
            ->with('success', 'Donation added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Donate $donate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donate $donate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donate $donate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donate $donate)
    {
        //
    }
}

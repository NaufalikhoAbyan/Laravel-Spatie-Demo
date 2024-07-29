<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('Officer/IndexView', [
            'officers' => Officer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Officer/CreateView');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Officer::create($request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
        ]));

        return redirect()->route('officers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Officer $officer)
    {
        return inertia('Officer/ShowView', [
            'officer' => $officer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Officer $officer)
    {
        return inertia('Officer/EditView', [
            'officer' => $officer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Officer $officer)
    {
        $officer->update($request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
        ]));

        return redirect()->route('officers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Officer $officer)
    {
        $officer->delete();

        return redirect()->route('officers.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\SchoolClub;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SchoolClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $school_clubs = SchoolClub::all();
        return view('school-clubs.index', compact('school_clubs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('school-clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SchoolClub $schoolClub)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SchoolClub $schoolClub)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SchoolClub $schoolClub)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SchoolClub $schoolClub)
    {
        //
    }
}

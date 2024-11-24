<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $teams = Team::all();
        return view('Team' , compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        // dd('sssssssssssss');
        $user = auth()->user();

        // Check if the user has reached the team limit


        // Validate request input
        $request->validate([
            'name' => 'required',
        ]);

        // Create the team
        $team = Team::create([
            'name' => $request->name,
            'owner_id' => $user->id,
        ]);

        // Attach the user as the team owner
        $team->users()->attach($user, ['role' => 'Owner']);

        // Redirect back with a success message
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // Delete team
    public function destroy(Team $team)
    {
        $team->delete();
        return 
        redirect()->route('Team')->with('success', 'Teamk deleted successfully.');
    }
}

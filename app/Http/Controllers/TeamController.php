<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Team;
// use Illuminate\Container\Attributes\Auth;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
{
    // Retrieve all teams
    $teams = Team::all();

    // Add tasks to each team


    // Pass the updated teams with their tasks to the view
    return view('Team', compact('teams'));
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




         // dd('sssssssssssss');
         $user = auth()->user();

         // Check if the user has reached the team limit
 
 
         // Validate request input
         $request->validate([
             'name' => 'required',
         ]);
             $teams=Team::where("owner_id",Auth::user()->id)->get();
             if ($teams->count() == 4) {
                 Stripe::setApiKey(config('stripe.sk'));
                     
                 $session = Session::create([
                     'line_items'  => [
                         [
                             'price_data' => [
                                 'currency'     => 'usd',
                                 'product_data' => [
                                     "name" => "LionsGeek Product",
                                     "description"=> "nyehehehehe"
                                 ],
                                 'unit_amount'  => 6900,
                             ],
                             'quantity'   => 2,
                         ],
 
                     ],
                     'mode'        => 'payment', // the mode  of payment
                     'success_url' => route('Team'), // route when success 
                     'cancel_url'  => route('Team'), // route when  failed or canceled
                 ]);
                 $team = Team::create([
                     'name' => $request->name,
                     'owner_id' => $user->id,
                 ]);
 
                 // Attach the user as the team owner
                 $team->users()->attach($user, ['role' => 'Owner']);
                 return redirect()->away($session->url);
             }else {
                 
                 // dd("dddd");
                         // Create the team
                        //  $team = Team::create([
                        //      'name' => $request->name,
                        //      'owner_id' => $user->id,
                        //  ]);
                 
                         // Attach the user as the team owner
                         $team->users()->attach($user, ['role' => 'Owner']);
                 
                         // Redirect back with a success message
                         return back();
             }

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

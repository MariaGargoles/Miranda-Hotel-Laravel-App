<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Auth::user()->activities()->get();
        return view('activities.index', ['activities' => $activities]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => ['required', 'in:Surf,Windsurf,Kayak,ATV,Hot air baloon'],
            'dateTime' => ['required', 'date'],
            'notes' => ['required', 'string', 'max:200'],
            'paid' => 'boolean',
            'satisfaction' => ['nullable', 'integer', 'between:0,10'],
        ]);

        $activity = Activity::create(array_merge($validated, [
            'user_id' => Auth::user()->id,
        ]));

        $activities = Auth::user()->activities()->get();

        return redirect()->route('activities.index')->with('success', 'Activity created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $activity = Auth::user()->activities()->where('id', $id)->firstOrFail();
        return view('activities.show', ['activity' => $activity]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activity = Auth::user()->activities()->where('id', $id)->firstOrFail();
    
        return view('activities.edit', ['activity' => $activity]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'type' => ['required', 'in:Surf,Windsurf,Kayak,ATV,Hot air baloon'],
            'dateTime' => ['required', 'date'],
            'notes' => ['required', 'string', 'max:200'],
            'satisfaction' => ['required', 'integer', 'between:0,10'],
        ]);
    
        $validated['paid'] = $request->boolean('paid', false);
    
        $activity = Auth::user()->activities()->where('id', $id)->firstOrFail();
        $activity->update($validated);
    
        return redirect()->route('activities.index')->with('success', 'Activity updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Auth::user()->activities()->where('id', $id)->firstOrFail();
        $activity->delete();
        
        return redirect()->route('activities.index')->with('success', 'Activity deleted successfully!');

    }
}

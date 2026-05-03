<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;
use Illuminate\Support\Facades\Storage;

class AdminTeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        menuSubmenu('team', 'teamAll');
        $teamMembers = TeamMember::orderBy('order')->latest()->paginate(20);
        return view('admin.team.index', compact('teamMembers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        menuSubmenu('team', 'createTeam');
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $ext = "." . $file->getClientOriginalExtension();
            $imageName = "team_" . time() . $ext;
            
            // Ensure directory exists
            if (!Storage::disk('public')->exists('team')) {
                Storage::disk('public')->makeDirectory('team');
            }
            
            $file->storeAs('team', $imageName, 'public');
        }

        TeamMember::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'company' => $request->company,
            'order' => $request->order ?? 0,
            'status' => $request->status ? true : false,
            'image' => $imageName,
        ]);

        return redirect()->route('team.index')->with('success', 'Team member added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeamMember $team)
    {
        menuSubmenu('team', 'teamAll');
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeamMember $team)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = $team->image;
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($team->image && Storage::exists('public/team/' . $team->image)) {
                Storage::delete('public/team/' . $team->image);
            }
            $file = $request->image;
            $ext = "." . $file->getClientOriginalExtension();
            $imageName = "team_" . time() . $ext;
            $file->storeAs('team', $imageName, 'public');
        }

        $team->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'company' => $request->company,
            'order' => $request->order ?? 0,
            'status' => $request->status ? true : false,
            'image' => $imageName,
        ]);

        return redirect()->route('team.index')->with('success', 'Team member updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeamMember $team)
    {
        if ($team->image && Storage::exists('public/team/' . $team->image)) {
            Storage::delete('public/team/' . $team->image);
        }
        $team->delete();
        return redirect()->route('team.index')->with('success', 'Team member deleted successfully.');
    }

    public function status(TeamMember $team)
    {
        $team->status = !$team->status;
        $team->save();
        return redirect()->back()->with('success', 'Status updated successfully.');
    }
}

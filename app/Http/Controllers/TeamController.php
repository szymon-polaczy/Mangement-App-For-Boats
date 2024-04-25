<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Jurager\Teams\Models\Team;

class TeamController extends Controller
{
    public function create_new_team_with_owner(Request $request): RedirectResponse
    {
        $team_options = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'user_id' => ['required', 'integer'], //TODO: is this the correct way to safely do this
        ]);

        $team = Team::create($team_options);

        return redirect()->route('team', ['id' => $team->id]);
    }
}

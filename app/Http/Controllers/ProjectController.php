<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use Vinkla\Hashids\Facades\Hashids;

class ProjectController extends Controller
{
    public function show($hashid)
    {
        $id = Hashids::decode($hashid)[0] ?? null;
        if (!$id) abort(404);
        $project = \App\Models\Project::findOrFail($id);
        return view('project.show', compact('project'));
    }
}

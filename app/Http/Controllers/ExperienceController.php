<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;

class ExperienceController extends Controller
{
    public function show($hashid)
    {
        $id = Hashids::decode($hashid)[0] ?? null;
        if (!$id) abort(404);
        $experience = \App\Models\Experience::findOrFail($id);
        return view('experience.show', compact('experience'));
    }
}

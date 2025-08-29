<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Experience;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {

        $experiences = Experience::orderBy('date', 'desc')->take(7)->get();
        $projects = Project::orderBy('date', 'desc')->take(7)->get();
        $data = [
            'title' => 'Dashboard | ArdhiCode',
            'projects' => $projects,
            'experiences' => $experiences
        ];
        return view('dashboard.index', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; // Import the Project model if using a database

class ProjectsController extends Controller
{
    public function index()
    {
       
        $project = [];

        return view('pages.project', ['project' => $project]);
        
    }
}

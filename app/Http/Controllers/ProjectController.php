<?php

namespace App\Http\Controllers;

use App\Models\Project; // Model Project
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $title = 'Daftar Project';
        $projects = Project::paginate(10);
        return view('ArticleProject.IndexProject', compact('projects', 'title'));
    }
}

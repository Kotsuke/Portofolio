<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->limit(3)->get(); // Ambil 3 proyek terbaru
        return view('home', compact('projects')); // Kirim data ke view
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        return view('projects');
    }

    public function show($id)
    {
        return view('project-detail', compact('id'));
    }

    public function contact()
    {
        return view('contact');
    }
}

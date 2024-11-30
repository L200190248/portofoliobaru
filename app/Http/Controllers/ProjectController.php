<?php

namespace App\Http\Controllers;

use App\Models\Project; // Model Project
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // Pastikan ada titik koma di akhir baris ini
        $title = 'Daftar Project'; // Titik koma ditambahkan di sini

        // Ambil data proyek dengan pagination, menampilkan 10 proyek per halaman
        $projects = Project::paginate(10);

        // Kirim data proyek ke view yang sesuai
        return view('ArticleProject.IndexProject', compact('projects', 'title'));
    }
}

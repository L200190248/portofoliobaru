<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleType;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    // Menampilkan daftar artikel
    public function index()
    {
        $categories = Category::all();
        // Mengambil artikel yang diurutkan berdasarkan waktu pembuatan terbaru
        $articles = Article::latest()->get(); // Mengambil semua artikel dan mengurutkan berdasarkan 'created_at' secara menurun
        $articleTypes = ArticleType::all(); // Ambil semua jenis artikel
        $title = 'Daftar Artikel'; // Judul halaman
        return view('IndexArticle', compact('categories', 'articles', 'title', 'articleTypes'));
    }

    // Menampilkan form untuk membuat artikel baru
    public function create()
    {
        $categories = Category::all();
        $articleTypes = ArticleType::all(); // Ambil semua jenis artikel dari database
        $title = 'Buat Artikel Baru'; // Judul halaman
        return view('ArticleCreate', compact('articleTypes', 'title', 'categories')); // Kirim data ke view
    }

    // Menyimpan artikel baru
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'article_type_id' => 'required|exists:article_types,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id', // Menambahkan validasi untuk kategori
        ]);

        // Membuat artikel baru
        $article = new Article();
        $article->title = $validated['title'];
        $article->content = $validated['content'];
        $article->author = $validated['author'];
        $article->article_type_id = $validated['article_type_id'];
        $article->category_id = $validated['category_id']; // Menyimpan kategori yang dipilih

        // Mengupload gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $article->image = basename($imagePath); // Menyimpan nama gambar ke database
        }

        // Simpan artikel
        $article->save();

        return redirect()->route('IndexArticle')->with('success', 'Artikel berhasil dibuat');
    }

    // Menampilkan artikel berdasarkan ID
    public function show($id)
    {
        // Mengambil artikel berdasarkan ID
        $article = Article::findOrFail($id);

        // Mengambil semua jenis artikel
        $articleTypes = ArticleType::all();

        // Gunakan judul artikel sebagai title halaman
        $title = $article->title;

        // Pastikan Anda mengirimkan variabel ke view dengan compact
        return view('ArticleDetail', compact('article', 'articleTypes', 'title'));
    }

    // Menampilkan form untuk mengedit artikel
    public function edit($id)
    {
        $article = Article::findOrFail($id); // Cari artikel berdasarkan ID
        $articleTypes = ArticleType::all(); // Ambil semua jenis artikel dari database
        $categories = Category::all(); // Ambil semua kategori dari database
        $title = 'Edit Artikel'; // Judul halaman
        return view('ArticleEdit', compact('article', 'articleTypes', 'title', 'categories')); // Kirim data ke view
    }

    // Mengupdate artikel berdasarkan ID
    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'article_type_id' => 'required|exists:article_types,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id', // Validasi kategori
        ]);

        // Mencari artikel berdasarkan ID
        $article = Article::findOrFail($id);
        $article->title = $validated['title'];
        $article->content = $validated['content'];
        $article->author = $validated['author'];
        $article->article_type_id = $validated['article_type_id'];
        $article->category_id = $validated['category_id']; // Update kategori artikel

        // Menghapus gambar lama jika ada
        if ($request->hasFile('image')) {
            if ($article->image && Storage::exists('public/images/' . $article->image)) {
                Storage::delete('public/images/' . $article->image);
            }
            // Menyimpan gambar baru
            $imagePath = $request->file('image')->store('images', 'public');
            $article->image = basename($imagePath);
        }

        // Menyimpan perubahan artikel
        $article->save();

        return redirect()->route('IndexArticle')->with('success', 'Artikel berhasil diperbarui.');
    }

    // Menghapus artikel berdasarkan ID
    public function destroy($id)
    {
        // Mencari artikel berdasarkan ID dan menghapusnya
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('IndexArticle')->with('success', 'Artikel berhasil dihapus');
    }

    // Menampilkan artikel berdasarkan kategori
    public function showByCategory($slug)
    {
        // Mencari kategori berdasarkan slug
        $category = Category::where('slug', $slug)->firstOrFail();

        // Mengambil artikel berdasarkan kategori yang diurutkan dari yang terbaru
        $articles = $category->articles()->latest()->get();

        // Kembalikan view dengan data kategori dan artikel
        $title = $category->name; // Gunakan nama kategori sebagai title halaman
        return view('ArticleByCategory', compact('category', 'articles', 'title'));
    }
}

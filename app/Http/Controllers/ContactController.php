<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage; // Pastikan model diimport
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Menampilkan halaman kontak
    public function index()
    {
        return view('ArticleContact.IndexContact');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Simpan pesan ke database
        $contactMessage = ContactMessage::create([ // Simpan pesan ke database dan simpan objek ke variabel
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        // Kirim email setelah pesan disimpan
        Mail::to('prameswaraari7@gmail.com')->send(new ContactFormSubmitted($contactMessage)); // Kirim objek pesan ke email

        // Berikan respons sukses
        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}

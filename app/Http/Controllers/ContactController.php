<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Menampilkan halaman formulir kontak
    public function index()
    {
        $title = 'Kontak Kami';
        return view('ArticleContact.IndexContact', compact('title'));
    }

    // Menangani pengiriman formulir kontak
    public function sendMessage(Request $request)
    {
        // Validasi input formulir
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'category' => 'required|string',
            'message' => 'required|string',
        ]);

        // Menyimpan data formulir kontak ke database
        $contactMessage = ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'category' => $request->category,
            'message' => $request->message,
        ]);

        // Mengirim email ke admin menggunakan mailable
        Mail::to('prameswaraari7@gmai.com')->send(new ContactFormSubmitted($contactMessage));

        // Mengarahkan kembali ke halaman kontak dengan pesan sukses
        return redirect()->route('contact.index')->with('success', 'Pesan Anda telah berhasil dikirim. Terima kasih!');
    }
}

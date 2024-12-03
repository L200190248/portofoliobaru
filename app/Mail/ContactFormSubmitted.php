<?php

namespace App\Mail;

use App\Models\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $contactMessage;

    public function __construct(ContactMessage $contactMessage)
    {
        $this->contactMessage = $contactMessage;
    }

    public function build()
    {
        // Pastikan nama view sesuai dengan file di resources/views/emails/contactform.blade.php
        return $this->view('ArticleContact.emails')
            ->subject('Pesan Kontak Baru');
    }
}

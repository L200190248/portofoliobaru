<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactMessage; // Pastikan untuk import model ContactMessage

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $contactMessage;

    /**
     * Create a new message instance.
     *
     * @param  ContactMessage  $contactMessage
     */
    public function __construct(ContactMessage $contactMessage)
    {
        $this->contactMessage = $contactMessage;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->view('ArticleContact.emails')
            ->subject('New Contact Message')
            ->with([
                'name' => $this->contactMessage->name,
                'email' => $this->contactMessage->email,
                'messageContent' => $this->contactMessage->message,
            ]);
    }
}

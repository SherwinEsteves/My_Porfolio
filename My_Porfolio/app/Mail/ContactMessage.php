<?php // <<<<< CONTACT MAIL >>>>> purpose: mailable that delivers contact form messages to the owner's inbox

namespace App\Mail; // <<<<< NAMESPACE >>>>> purpose: places the mailable under App\Mail

use Illuminate\Bus\Queueable; // <<<<< IMPORT >>>>> purpose: enables queueable mails
use Illuminate\Mail\Mailable; // <<<<< IMPORT >>>>> purpose: base mailable class
use Illuminate\Mail\Mailables\Address; // <<<<< IMPORT >>>>> purpose: typed email address with display name
use Illuminate\Mail\Mailables\Content; // <<<<< IMPORT >>>>> purpose: defines the email view
use Illuminate\Mail\Mailables\Envelope; // <<<<< IMPORT >>>>> purpose: defines subject and recipients
use Illuminate\Queue\SerializesModels; // <<<<< IMPORT >>>>> purpose: safe serialization when queued

class ContactMessage extends Mailable // <<<<< CONTACT MESSAGE >>>>> purpose: renders and sends the contact email
{
    use Queueable, SerializesModels; // <<<<< TRAITS >>>>> purpose: standard mailable traits

    public array $data; // <<<<< DATA >>>>> purpose: validated form input passed to the view

    public function __construct(array $data) // <<<<< CONSTRUCTOR >>>>> purpose: receives the form payload
    {
        $this->data = $data; // <<<<< STORE >>>>> purpose: keep the payload for the view
    }

    public function envelope(): Envelope // <<<<< ENVELOPE >>>>> purpose: email subject and reply-to
    {
        return new Envelope( // <<<<< NEW ENVELOPE >>>>> purpose: build the envelope
            subject: $this->data['subject'] ?: 'New Contact Message from Portfolio', // <<<<< SUBJECT >>>>> purpose: use the visitor's subject or a fallback
            replyTo: [ // <<<<< REPLY TO >>>>> purpose: replies go straight to the visitor
                new Address($this->data['email'], $this->data['name']), // <<<<< VISITOR >>>>> purpose: visitor's email + display name
            ],
        );
    }

    public function content(): Content // <<<<< CONTENT >>>>> purpose: point to the markdown view
    {
        return new Content( // <<<<< NEW CONTENT >>>>> purpose: define the view and its data
            markdown: 'emails.contact-message', // <<<<< VIEW >>>>> purpose: markdown template path
            with: ['data' => $this->data], // <<<<< DATA >>>>> purpose: expose the payload to the view
        );
    }
}

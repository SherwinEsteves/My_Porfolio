<?php // <<<<< CONTACT CONTROLLER >>>>> purpose: handles the contact form submission and sends the email

namespace App\Http\Controllers; // <<<<< NAMESPACE >>>>> purpose: places the controller under App\Http\Controllers

use App\Mail\ContactMessage; // <<<<< IMPORT >>>>> purpose: the mailable used to send the message
use Illuminate\Http\Request; // <<<<< IMPORT >>>>> purpose: type hint for the incoming request
use Illuminate\Support\Facades\Mail; // <<<<< IMPORT >>>>> purpose: mailer facade

class ContactController extends Controller // <<<<< CONTACT CONTROLLER >>>>> purpose: process the contact form
{
    public function send(Request $request) // <<<<< SEND >>>>> purpose: validate input and email the owner
    {
        $validated = $request->validate([ // <<<<< VALIDATE >>>>> purpose: ensure the required fields are present
            'name'    => ['required', 'string', 'max:255'], // <<<<< NAME >>>>> purpose: sender name
            'email'   => ['required', 'email', 'max:255'], // <<<<< EMAIL >>>>> purpose: sender email, must be valid
            'subject' => ['nullable', 'string', 'max:255'], // <<<<< SUBJECT >>>>> purpose: optional subject line
            'message' => ['required', 'string'], // <<<<< MESSAGE >>>>> purpose: message body
        ]);

        Mail::to(config('mail.from.address')) // <<<<< DESTINATION >>>>> purpose: deliver to the owner's inbox
            ->send(new ContactMessage($validated)); // <<<<< SEND >>>>> purpose: fire the mailable

        return back()->with('success', 'Your message has been sent. Thank you!'); // <<<<< RESPONSE >>>>> purpose: confirm to the visitor
    }
}

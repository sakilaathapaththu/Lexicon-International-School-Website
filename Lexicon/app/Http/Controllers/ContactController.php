<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_type' => 'required|string|in:student,parent,teacher,other',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|in:admissions,academic,facilities,extracurricular,fees,transport,complaint,suggestion,other',
            'message' => 'required|string|max:1000',
            'priority' => 'required|string|in:low,medium,high',
            'agreement' => 'required|accepted',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            // Create contact record
            $contact = Contact::create([
                'user_type' => $request->user_type,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
                'priority' => $request->priority,
                'status' => 'pending',
            ]);

            // Send email notification (optional)
            // You can uncomment this if you want to send emails
            /*
            Mail::send('emails.contact', ['contact' => $contact], function ($message) use ($contact) {
                $message->to('admin@lexiconschool.lk')
                        ->subject('New Contact Form Submission - ' . ucfirst($contact->subject));
            });
            */

            return back()->with('success', 'Your message has been sent successfully! We will get back to you within 24-48 hours.');

        } catch (\Exception $e) {
            return back()->with('error', 'Sorry, there was an error sending your message. Please try again later.')->withInput();
        }
    }

    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')
                          ->paginate(20);
        
        return view('admin.contacts.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back()->with('success', 'Contact deleted successfully.');
    }

    public function toggleStatus(Contact $contact)
    {
        $contact->status = $contact->status === 'pending' ? 'resolved' : 'pending';
        $contact->save();
        
        return back()->with('success', 'Contact status updated successfully.');
    }
}
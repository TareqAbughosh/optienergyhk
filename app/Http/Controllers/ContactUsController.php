<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function contactUs(Request $request){
        $this->validate($request, [
            'email' => 'required|string',
            'name' => 'required|string',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        try { 
        Mail::send([], $request->all(), function($message) use($request) {
            $message->to('info@optienergies.com', 'Opti energies')->subject
               ('A new contact!')
            ->subject($request->subject)
            ->html("<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Contact Us Form Submission</title>
            </head>
            <body>
                <h2>Contact Us Form Submission</h2>
                
                <p>Hello,</p>
            
                <p>We have received a new message from the Contact Us form on our website. Here are the details:</p>
            
                <table>
                    <tr>
                        <td><strong>Name:</strong></td>
                        <td>$request->name</td>
                    </tr>
                    <tr>
                        <td><strong>Email:</strong></td>
                        <td>$request->email</td>
                    </tr>
                    <tr>
                        <td><strong>Subject:</strong></td>
                        <td>$request->subject</td>
                    </tr>
                    <tr>
                        <td><strong>Message:</strong></td>
                        <td>$request->message</td>
                    </tr>
                </table>
            
                <p>Thank you for reaching out to us. We will respond to this inquiry as soon as possible.</p>
            
                <p>Best regards,</p>
                <p>Opti Energies</p>
            </body>
            </html>
            ");
         });
        } catch (\Exception $e){
            return back()->with('error', 'sorry something went wrong!');
        }
        return back()->with('success', 'Your form has been submitted successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class EmailController extends Controller
{
    public function sendWelcomeEmail()
    {
        $toEmail = 'marielemondelo7@gmail.com'; // Update with your recipient's email
        $message = 'You are successfully Booked!';
        $subject = 'Welcome Email in Laravel Using Gmail';

        try {
            Mail::to($toEmail)->send(new WelcomeEmail($message, $subject));
            return 'Email has been sent successfully!';
        } catch (\Exception $e) {
            return $e->getMessage(); // Return error message for debugging
        }
    }
}

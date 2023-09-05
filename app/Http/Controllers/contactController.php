<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


use Validator;
use Illuminate\Support\Facades\Input;


class contactController extends Controller
{
    //

    function sendMail(Request $request){

        $rules = ['g-recaptcha-response' => 'required|captcha'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            echo '<p style="color: #ff0000;">Incorrect!</p>';
        }
        else
        {
            echo '<p style="color: #00ff30;">Matched :)</p>';
            

        $subject = "Contact From " . $request->input('name');
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('message');

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            // Pengaturan Server
            // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'mail.wekakaryanusa.com';                  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'info@wekakaryanusa.com';                 // SMTP username
            $mail->Password = 'info1234';                           // SMTP password
            $mail->SMTPSecure = '';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            // Siapa yang mengirim email
            $mail->setFrom($emailAddress, $name);

            // Siapa yang akan menerima email
            $mail->addAddress('info@wekakaryanusa.com', $name);     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional

            // ke siapa akan kita balas emailnya
            $mail->addReplyTo($emailAddress, $name);

            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();

            $request->session()->flash('status', 'THank You, Your message have been recieve.');
            return view('pages.contact');

        

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

        }
    }
}

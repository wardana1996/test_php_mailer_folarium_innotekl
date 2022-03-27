<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class mailerController extends Controller
{
    function showContactForm(){
        return view('mailer');
    }

    function sendMail(Request $request){
        
        $subject =$request->input('subject');
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('message');

        $mail = new PHPMailer(true);                             
        try {                               
            $mail->isSMTP();                                      
            $mail->Host = 'smtp.gmail.com';                  
            $mail->SMTPAuth = true;                               
            $mail->Username = 'email_anda@gmail.com';  //silahkan input email disini              
            $mail->Password = 'password_anda';  //silahkan input password disini                       
            $mail->SMTPSecure = 'tls';                            
            $mail->Port = 587;                                   

            $mail->setFrom("antonius@gmail.com", "Antonius Bonarparteus");

            $mail->addAddress('muhammadwardana2014@gmail.com', 'Wardana Putra');     
           
            $mail->addReplyTo($emailAddress, $name);

            
            $mail->isHTML(true);                                  
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();

            $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
            return view('mailer');

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

    }
}

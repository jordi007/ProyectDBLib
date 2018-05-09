<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

class Correo{

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    public static function enviarCorreo($receptor, $libro, $multa, $nombre){
        $mail = new PHPMailer(true); 
        try {
            //Server settings
           $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp-mail.outlook.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'biblioteca935bd@outlook.com';                 // SMTP username
            $mail->Password = '@asd4567';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('biblioteca935bd@outlook.com', 'Biblioteca 935');
            $mail->addAddress($receptor, 'Suscriptor'); 
                // Add a recipient
            //$mail->addAddress('ellen@example.com');               // Name is optional
            $mail->addReplyTo('biblioteca935bd@outlook.com', 'Biblioteca 935');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('usuario@gmail.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('photo_2017-10-19_21-55-47.jpg', 'importante.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Informacion de prestamo del libro';
            $mail->Body    = 'El motivo del presente correo es para darle informacion sobre el prestamo de libro en la biblioteca 935.
                <p> Estimado '.$nombre.' usted retiro el libro '.$libro.' hace un tiempo y se ha vencido su plazo, por lo tanto tiene una multa de: '.$multa. '.
                <P> Agradeceriamos cuide el material que usted y a muchos otro les sirve.
                <p> Recuerde devolver el libro en el tiempo estipulado de lo contrario nos veremos obligados a cobrar una multa. Gracias';
            $mail->AltBody = '';

            $mail->send();
            echo 'El correo ha sigo enviado satisfactoriamente';
        } 
        catch (Exception $e) {
            echo 'Ha fallafo el envio del correo.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
    

}


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';


// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $emailRecipient = $_POST['emailRecipient'];
    $emailBody = $_POST['emailBody'];
    
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.office365.com';             //  smtp host
        $mail->SMTPAuth = true;
        $mail->Username = 'camping-scrum@hotmail.com';   //  sender username
        $mail->Password = 'nioesf21noi!';       // sender password
        $mail->SMTPSecure = 'STARTTLS';                  // encryption - ssl/tls
        $mail->Port = 587;                          // port - 587/465

        // Recipients
        $mail->setFrom('camping-scrum@hotmail.com', 'Camping Scrum');
        $mail->addAddress($emailRecipient);

        // Attachments
        if (isset($_FILES['emailAttachments'])) {
            $attachments = $_FILES['emailAttachments'];
            foreach ($attachments['tmp_name'] as $key => $attachment) {
                $mail->addAttachment($attachment, $attachments['name'][$key]);
            }
        }

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Camping Scrum BV | Emailer';
        $mail->Body    = $emailBody;

        // Send the email
        $mail->send();
        echo 'Email Verzonden.';
    } catch (Exception $e) {
        echo 'Email niet verzonden Error: ', $mail->ErrorInfo;
    }
}
?>

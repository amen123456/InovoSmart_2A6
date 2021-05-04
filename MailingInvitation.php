<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
include "../controller/commentaireC.php";
if (isset($_POST['id_commentaire'])){
$commentaire1C=new CommentaireC();
$result=$commentaire1C->recupererCommentaire($_POST["id_commentaire"]);
foreach($result as $row)
{
   
$nom=$row['nom'];
$prenom=$row['prenom'];
$id_article=$row['id_article'];
$id_commentaire=$row['id_commentaire'];
 $commentaire=$row['commentaire'];
}
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'mouna.chorfi@esprit.tn';                     // SMTP username
    $mail->Password   = 'mounachorfi1920*';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('mouna.chorfi@esprit.tn', 'Responsable des article');
    $mail->addAddress('mouna.chorfi@esprit.tn', '');    // Add a recipient
    


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Rappel !';
    $mail->Body    = "
Commentaire sous id: $id_commentaire

        Mr/Mme $nom $prenom     
Vous etes membre de notre team animshop!N'oubliez pas de faire un commentaire d'id: $id_commentaire
Nous sommes heureux de travailler avec vous !";

    $mail->send();
    echo 'Message has been sent';
    $test=1;
    echo ("<script language='javascript'>window.location.href='affichercommentaire.php?notification=$test'</script>");

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}}
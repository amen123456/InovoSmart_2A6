<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
include "../../controller/livreurC.php";
if (isset($_POST['Idlivreur'])){
$livreur1C=new LivreurC();
$result=$livreur1C->recupererLivreur($_POST["Idlivreur"]);
foreach($result as $row)
{
    $email=$row['email'];
$nom=$row['nom'];
$prenom=$row['prenom'];
$Idlivreur=$row['Idlivreur'];
$Idlivraison=$row['Idlivraison'];
}
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'eya.bensalem@esprit.tn';                     // SMTP username
    $mail->Password   = 'Kiralikask0902';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('eya.bensalem@esprit.tn', 'Responsable de la livraison');
    $mail->addAddress($email, 'Livreur animshop');     // Add a recipient
    


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Rappel !';
    $mail->Body    = "
Livreur sous id: $Idlivreur

        Mr/Mme $nom $prenom     
Vous etes membre de notre team animshop!N'oubliez pas d'assurer la livraison d'id: $Idlivraison
Nous sommes heureux de travailler avec vous !";

    $mail->send();
    echo 'Message has been sent';
    $test=1;
    echo ("<script language='javascript'>window.location.href='afficherlivreur.php?notification=$test'</script>");

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}}
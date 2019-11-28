<link rel="stylesheet" type="text/css" href="666.css">
<?php
include 'header.html';
?>

<h1>Formulaire du Diable</h1>

<form action="666.php" method="POST">
    <div class="centrer">
        <label>Nom :</label><textarea type="text" name="nom" rows="1" cols="30"></textarea>
    </div>
    <div class="centrer">
        <label>Email :</label><textarea type="email" name="email" rows="1" cols="30"></textarea>
    </div>
    <div class="centrer">
        <label>Sujet :</label><textarea type="text" name="sujet" rows="1" cols="30"></textarea>
    </div>
    <div class="centrer">
        <label>Message :</label>
    </div>
    <div class="centrer">
        <textarea type="text" name="message" rows="20" cols="30"></textarea>
    </div>
    <div class="centrer">
        <input type="submit" value="Envoyer"/>
    </div>
</form>

<?php
$nombre_de_lignes = 1;

require_once('phpmailer/src/PHPMailer.php');
require_once('phpmailer/src/SMTP.php');
require_once('phpmailer/src/Exception.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 if (!empty($_POST['nom'])&&!empty($_POST['email'])&&!empty($_POST['sujet'])&&!empty($_POST['message'])) {
    $name=$_POST['nom'];
    $email=$_POST['email'];
    $objet=$_POST['sujet'];
    $msg=$_POST['message'];
    echo $name ,$mail,$objet,$msg;
$mail = new PHPmailer();
$mail->isSMTP(); // Paramétrer le Mailer pour utiliser SMTP
// $mail->Host = 'smtp.gmail.com'; // Spécifier le serveur SMTP
// $mail->SMTPAuth = true; // Activer authentication SMTP
// $mail->Username = 'i.salhi@it-students.fr'; // Votre adresse email d'envoi
// $mail->Password = '1991jane@'; // Le mot de passe de cette adresse email
// $mail->SMTPSecure = 'TLS/SSL'; // Accepter SSL
// $mail->Port = 465;
$mail->Host = 'ssl0.ovh.net'; // Spécifier le serveur SMTP
$mail->SMTPAuth = true; // Activer authentication SMTP
$mail->Username = 'it@ws312.com'; // Votre adresse email d'envoi
$mail->Password = 'Azertyuiop0'; // Le mot de passe de cette adresse email
$mail->SMTPSecure = 'ssl'; // Accepter SSL
$mail->Port = 465;
$mail->setFrom('it@ws312.com','le msg'); // Personnaliser l'envoyeur
$mail->addAddress('q.comelli@it-students.fr', 'Karim User'); // Ajouter le destinataire
//$mail->addAddress('To2@example.com');
$mail->addReplyTo($email,$name); // L'adresse de réponse
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz'); // Ajouter un attachement
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');
$mail->isHTML(true); // Paramétrer le format des emails en HTML ou non
$mail->Subject = $objet;
$mail->Body = $msg;
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) {
    echo 'Erreur, message non envoyé.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
 } else {
    echo 'Le message a bien été envoyé !';
 }}
?>

<?php
include 'footer.html';
?>
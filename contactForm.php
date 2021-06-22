<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="The from's answer of hackers-poulette website">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Hackers poulette - answer</title>
</head>

<?php
require "./vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    $firstname = filter_var($_POST["firstname"], FILTER_SANITIZE_STRING);
    $lastname = filter_var($_POST["lastname"], FILTER_SANITIZE_STRING);
    $gender = filter_var($_POST["gender"], FILTER_SANITIZE_STRING);
    $mail_from = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $country = filter_var($_POST["country"], FILTER_SANITIZE_STRING);
    $subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    $validation_filter = true;

    if ($_POST["honey"] != "") {
        $validation_filter = false;
        echo "Get rekt !";
    }
    if (filter_var($mail_from, FILTER_VALIDATE_EMAIL) === false || empty($mail_from)) {
        $validation_filter = false;
    };

    if ($validation_filter === true) {

        $mail = new PHPMailer();

        try {
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'jazzonbecode@gmail.com';
            $mail->Password   = 'formation';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->Port       = 587;
            //Recipients
            $mail->setFrom('jazzonbecode@gmail.com');
            $mail->addAddress($mail_from, "$firstname" . " " . "$lastname");     //Add a recipient
            $mail->addReplyTo('info@example.com', 'Information');
            //Content
            $mail->isHTML(true);

            //Content
            $mail->Subject = $subject;
            $mail->Body    = "You have recieved an email from " . $firstname . " " . $lastname . ". \n\n" . $message;

            $mail->send();
            // echo "done";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
?>

<body>
    <nav class="navbar px-6 pt-1 pb-1">
        <div class="navbar-brand">
            <div class="navbar-item">
                <img src="assets/img/hackers-poulette-logo.png" alt="hackers-poulette logo">
            </div>
        </div>

        <div class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    Home
                </a>

                <a class="navbar-item">
                    Shop
                </a>

                <a class="navbar-item">
                    Contact
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- MAIN -->
    <main class="answer">
        <div class="bubble">
            <p class="has-text-centered is-size-4">Hello <?= $firstname ?> we have recieved your message</br>
            and we'll answer soon as possible.</p>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="footer p-4">
        <div class="content has-text-centered">
            <p>
                Follow us on social network :
            </p>
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-twitch"></i>
            <i class="fab fa-youtube"></i>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/2e53bc6269.js" crossorigin="anonymous"></script>
</body>

</html>
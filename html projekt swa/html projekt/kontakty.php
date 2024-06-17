<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Získanie údajov z formulára
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Nastavenie e-mailových údajov
    $to = "vas_email@domena.sk"; // Zmeňte na vašu e-mailovú adresu
    $subject = "Nová správa z kontaktného formulára";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Vytvorenie tela e-mailu
    $email_body = "<h2>Nová správa z kontaktného formulára</h2>";
    $email_body .= "<p><strong>Meno:</strong> {$name}</p>";
    $email_body .= "<p><strong>Email:</strong> {$email}</p>";
    $email_body .= "<p><strong>Správa:</strong><br>{$message}</p>";

    // Odoslanie e-mailu
    if (mail($to, $subject, $email_body, $headers)) {
        echo "<p>Správa bola úspešne odoslaná.</p>";
    } else {
        echo "<p>Pri odosielaní správy nastala chyba.</p>";
    }
} else {
    echo "<p>Nie je možné odoslať formulár.</p>";
}
?>
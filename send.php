<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

 
    $to = "ancikomazec@gmail.com"; 
    $subject = "Poruka sa sajta Portfolio";
    $body = "Ime: $name\nEmail: $email\nPoruka:\n$message";
    $headers = "From: $email";

  
    if(mail($to, $subject, $body, $headers)) {
        echo "<h2>Poruka poslata! Hvala što ste me kontaktirali.</h2>";
    } else {
        echo "<h2>Došlo je do greške. Pokušajte kasnije.</h2>";
    }
} else {
    echo "<h2>Neispravan zahtev.</h2>";
}
?>

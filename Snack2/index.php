<!-- Passare come parametri GET “name”, “mail” e “age” e verificare (cercando i
metodi che non conosciamo nella documentazione) che:
● “name” sia più lungo di 3 caratteri; // strlen()
● “mail” contenga un punto e una chiocciola; // strpos()
● “age” sia un numero. is_int()
Se tutto è ok, stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
// var_dump($_GET);

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];


$nameLenght = strlen($name);
// var_dump($nameLenght);
$checkDotMail = strpos($mail, '.' );
// var_dump($checkDotMail);
$checkAtMail = strpos($mail, '@');
// var_dump($checkAtMail);
$checkIntegerAge = intval($age);
$checlIntegerAge2 = ctype_digit($age); // is_numeric();
// var_dump($checkIntegerAge);

if (!empty($_GET)) {
    if ($nameLenght > 3 && $checkDotMail !== false && $checkAtMail !== false && is_numeric($age)) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato!";
    }
}

//potrei anche andare a creare le condizioni direttamente nelle variabili, di modo da aver la sicurezza nel caso in giorno cambino i termini di validazione del mio form

 ?>
<form method="GET">
    <input type="text" name="name" placeholder="Inserisci il tuo nome">
    <input type="text" name="mail" placeholder="Inserisci la tua mail">
    <input type="number" name="age"> <br>
    <input type="submit" name="pulsante" value="Invia i dati">
</form>

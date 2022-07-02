<?php

$jmeno = $_POST['jmeno'];
$prijmeni = $_POST['prijmeni'];

$email = $_POST['email'];
$cislo = $_POST['cislo'];

$text = $_POST['text'];

$headers =  'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: Your name <caujasutom@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$predmet = "Nová žádost o hlídání";

if (!empty($jmeno) || !empty($prijmeni) || !empty($email) || !empty($cislo) || !empty($text)) {
    if (!IsInjected($jmeno) && !IsInjected($prijmeni) || !IsInjected($email) || !IsInjected($cislo) || !IsInjected($text)) {
        mail($email, $predmet, $text, $headers);
    }
}

function IsInjected($str)
{
    $injections = array(
        '(\n+)',
        '(\r+)',
        '(\t+)',
        '(%0A+)',
        '(%0D+)',
        '(%08+)',
        '(%09+)'
    );

    $inject = join('|', $injections);
    $inject = "/$inject/i";

    if (preg_match($inject, $str)) {
        return true;
    } else {
        return false;
    }
}
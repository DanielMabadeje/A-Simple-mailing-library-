<?php

/*
 * E-mail library
 */
function sendEmail($address, $subject, $sender, $message)
{
    $header = 'From:' . $sender;
    $header .= "\nMIME-Version: 1.0\n";
    $header .= "Content-Type: text/html; charset=\"utf-8\"\n";
    $success = mb_send_mail($address, $subject, $message, $header);
    return $success;
}
<?php
/**
 * Created by PhpStorm.
 * User: Jia
 * Date: 2017/3/23
 * Time: 12:03
 */

require 'vendor/autoload.php';

// Create the Transport
$transport = Swift_SmtpTransport::newInstance('smtp.mailgun.org', 25)
    ->setUsername('postmaster@byross.tech')
    ->setPassword('5f83e9a0adccdd948068fc6a0c16d7a1');

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

$email = $_POST['exampleInputEmail1'];
$name = $_POST['exampleInputName1'];
$phone = $_POST['exampleInputPhone1'];
$msg = $_POST['exampleInputMessage1'];

// Create a message
$message = Swift_Message::newInstance('SOLIS')
    ->setFrom(array('postmaster@byross.tech' => 'SOLIS'))
    ->setTo(array($email, $email => $name))
    ->setBody($msg);

// Send the message
$result = $mailer->send($message);

if ($result != 0) {
    echo "success";
}else {
    echo "false";
}

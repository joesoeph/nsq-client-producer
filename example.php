<?php

require_once('vendor/autoload.php');

use NSQClientProducer\Send;

$sendTo = new Send([
  'waURL' => 'http://example.com/pub?topic=whatsapp',
  'emailURL' => 'http://example.com/pub?topic=email',
]);

$sendWA = $sendTo->sendWhatsapp('6283399900011', 'Your WA message');
$sendEmail = $sendTo->sendEmail('some-people@mailinator.com', 'Your email message', 'Your email suject');


echo $sendEmail;
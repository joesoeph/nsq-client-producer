# NSQ Client Producer

## Description

Simple send email or whatsapp to NSQ server without hasle. You need to setup your NSQ server before using this package.

## How to use
1. Install via composer `composer require joesoeph/nsq-client-producer`
2. Open file `example.php` or run via command `php -S localhost:8585` from this package folder
3. Done :)

## Example code
```
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
```

## License

MIT
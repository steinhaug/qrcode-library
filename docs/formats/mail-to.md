MailToFormat
------------

To encode an e-mail address like sean@example.com, one could simply encode noreply@systemweb.no. However to ensure it is 
recognized as an e-mail address, it is advisable to create a proper mailto: URI from the address: 
`mailto:noreply@systemweb.no`.

This class helps to enforce the above rule. 

Usage
-----

```php 

use Da\QrCode\QrCode;
use Da\QrCode\Format\MailtoFormat; 

$format = new MailToFormat(['email' => 'noreply@systemweb.no']);

$qrCode = new QrCode($format);

header('Content-Type: ' . $qrCode->getContentType());
echo $qrCode->writeString();

```

© https://2am.tech/ 2013-2023

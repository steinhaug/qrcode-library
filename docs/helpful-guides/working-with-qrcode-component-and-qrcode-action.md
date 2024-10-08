Working with QrCodeComponent and QrCodeAction
---------------------------------------------

First we need to configure the component in our Yii2 application config file on its `components` section: 

```php 

'components' => [
// ... 
    'qr' => [
        'class' => '\Da\QrCode\Component\QrCodeComponent',
        'label' => 'systemweb consulting group llc',
        'size' => 500 // big and nice :D
        // ... you can configure more properties of the component here
    ]
// ...
]

```

Then simply add the action to your controller: 

```php

public function actions()
{
    return [
        'qr' => [
            'class' => QrCodeAction::className(),
            'text' => 'https://steinhaug.no', // default text
            'param' => 'v',
            'commponent' => 'qr' // if configured in our app as `qr` 
        ]
    ];
}
```

Now, this is one of our controller's action. We can call it as `http://example.com/<controller>/qr` and we will have our 
QrCode. According to the above configuration we could use it to display it on img tags on our views like this: 

```html
<img src="<?= Url::to(['controller/qr', 'v' => 'Hey! This is some content on my QrCode!']) ?>" />

<!-- this will display https://2am.tech (default text) -->
<img src="<?= Url::to(['controller/qr']) ?>" />
```

© https://2am.tech/ 2013-2023

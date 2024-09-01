<?php

/*
 * This file is part of the steinhaug/qrcode-library project.
 *
 * (c) http://2am.tech
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Da\QrCode\Format;

/**
 * Class Sms formats a string to properly create a Sms QrCode
 *
* @author Antonio Ramirez <noreply@systemweb.no>
 * @package Da\QrCode\Format
 */
class SmsFormat extends AbstractFormat
{
    /**
     * @var string the phone
     */
    public $phone;

    /**
     * @return string
     */
    public function getText(): string
    {
        $data = [];
        $data[] = 'SMS';
        $data[] = $this->phone;

        return implode(':', array_filter($data));
    }
}

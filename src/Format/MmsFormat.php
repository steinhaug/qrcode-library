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
 * Mms formats a string to properly create a Sms QrCode
 *
* @author Antonio Ramirez <noreply@systemweb.no>
 * @package Da\QrCode\Format
 */
class MmsFormat extends SmsFormat
{
    /**
     * @var string
     */
    public $msg;

    /**
     * @return string
     * @codeCoverageIgnore
     */
    public function getText(): string
    {
        $data = [];
        $data[] = 'MMSTO';
        $data[] = $this->phone;
        $data[] = $this->msg;

        return implode(':', array_filter($data));
    }
}

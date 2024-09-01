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

use Da\QrCode\Traits\EmailTrait;

/**
 * Class MailTo formats a string to properly create a MailID QrCode
 *
* @author Antonio Ramirez <noreply@systemweb.no>
 * @package Da\QrCode\Format
 */
class MailToFormat extends AbstractFormat
{
    use EmailTrait;

    /**
     * @inheritdoc
     */
    public function getText(): string
    {
        return "MAILTO:{$this->email}";
    }
}

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
 * Class MailMessage formats a string to properly create a NNTMail QrCode
 *
 * @author Antonio Ramirez <noreply@systemweb.no>
 * @package Da\QrCode\Format
 */
class MailMessageFormat extends AbstractFormat
{
    use EmailTrait;

    /**
     * @var string the subject
     */
    public $subject;
    /**
     * @var string the body of the mail message
     */
    public $body;

    /**
     * @inheritdoc
     */
    public function getText(): string
    {
        return "MATMSG:TO:{$this->email};SUB:{$this->subject};BODY:{$this->body};;";
    }
}

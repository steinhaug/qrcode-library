<?php

/*
 * This file is part of the steinhaug/qrcode-library project.
 *
 * (c) http://2am.tech
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Da\QrCode\Contracts;

interface FormatInterface
{
    /**
     * @return string the formatted string to be encoded
     */
    public function getText(): string;
}

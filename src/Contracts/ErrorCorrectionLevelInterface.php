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

interface ErrorCorrectionLevelInterface
{
    public const LOW = 'low';
    public const MEDIUM = 'medium';
    public const QUARTILE = 'quartile';
    public const HIGH = 'high';
}

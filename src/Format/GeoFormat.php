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
 * Class Geo formats a string to properly create a Geo QrCode
 *
 * @author Antonio Ramirez <noreply@systemweb.no>
 * @package Da\QrCode\Format
 */
class GeoFormat extends AbstractFormat
{
    public $lat;
    public $lng;
    public $altitude;

    /**
     * @inheritdoc
     */
    public function getText(): string
    {
        return "GEO:{$this->lat},{$this->lng},{$this->altitude}";
    }
}

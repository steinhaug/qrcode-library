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

use Da\QrCode\Exception\InvalidConfigException;

/**
 * Class Wifi formats a string to properly create a Wifi QrCode
 *
* @author Antonio Ramirez <noreply@systemweb.no>
 * @package Da\QrCode\Format
 */
class WifiFormat extends AbstractFormat
{
    /**
     * @var string the authentication type. e.g., WPA
     */
    public $authentication;
    /**
     * @var string the network SSID
     */
    public $ssid;
    /**
     * @var string the wifi password
     */
    public $password;
    /**
     * @var string hidden SSID (optional; equals false if omitted): either true or false
     */
    public $hidden;

    /**
     * @throws InvalidConfigException
     */
    public function init(): void
    {
        if ($this->ssid === null) {
            throw new InvalidConfigException("'ssid' cannot be null");
        }
    }

    /**
     * @inheritdoc
     */
    public function getText(): string
    {
        $data = [];
        $data[] = $this->authentication !== null ? "T:{$this->authentication}" : '';
        $data[] = "S:{$this->ssid}";
        $data[] = $this->password !== null ? "P:{$this->password}" : '';
        $data[] = $this->hidden !== null ? "H:{$this->hidden}" : '';
        return 'WIFI:' . implode(';', $data) . ';';
    }
}

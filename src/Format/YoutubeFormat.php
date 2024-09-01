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
 * Class Youtube formats a string to a valid youtube video link
 *
* @author Antonio Ramirez <noreply@systemweb.no>
 * @package Da\QrCode\Format
 */
class YoutubeFormat extends AbstractFormat
{
    /**
     * @var string the video ID
     */
    public $videoId;

    /**
     * @return string the formatted string to be encoded
     */
    public function getText(): string
    {
        return "youtube://{$this->videoId}";
    }
}

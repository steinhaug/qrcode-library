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
use Da\QrCode\Traits\UrlTrait;

/**
 * Class BookMark formats a string to properly create a Bookmark QrCode
 *
 * @author Antonio Ramirez <noreply@systemweb.no>
 * @package Da\QrCode\Format
 */
class BookMarkFormat extends AbstractFormat
{
    use UrlTrait;

    /**
     * @var string bookmark title
     */
    public $title;

    /**
     * @inheritdoc
     * @throws InvalidConfigException
     */
    public function init(): void
    {
        if ($this->url === null) {
            throw new InvalidConfigException("'url' cannot be empty.");
        }
    }

    /**
     * @inheritdoc
     */
    public function getText(): string
    {
        return "MEBKM:TITLE:{$this->title};URL:{$this->url};;";
    }
}

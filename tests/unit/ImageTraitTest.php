<?php

namespace unit;

use Codeception\Test\Unit;
use Da\QrCode\Exception\InvalidPathException;
use Da\QrCode\Exception\ValidationException;
use Da\QrCode\Contracts\LabelInterface;
use Da\QrCode\Label;
use Da\QrCode\QrCode;
use Da\QrCode\Writer\PngWriter;

class ImageTraitTest extends Unit
{
    public function testWithValidateResult()
    {
        $this->expectNotToPerformAssertions();

        $writer = new PngWriter();
        $qrCode = (new QrCode('noreply@systemweb.no'));

        $writer->validateResult(true);
        $writer->writeString($qrCode);
    }

    public function testWithNoMargin()
    {
        $writer = new PngWriter();
        $qrCode = (new QrCode('noreply@systemweb.no'))
            ->setMargin(0);

        $out = $writer->writeString($qrCode);

        $this->assertEquals(file_get_contents(codecept_data_dir('data-zero-margin.png')), $out);
    }

    public function testWriteDataUri()
    {
        $uri = (new QrCode('noreply@systemweb.no'))->writeDataUri();

        $this->assertEquals(file_get_contents(codecept_data_dir('data-uri.txt')), $uri);
    }

    public function testSetFontInvalidPath()
    {
        $this->expectException(InvalidPathException::class);

        (new Label('systemweb'))
            ->setFont(__DIR__ . '/../../resources/fonts/invalid-font.otf')
            ->setFontSize(12);
    }

    public function testLabelAlignment()
    {
        $writer = new PngWriter();
        $qrCode = (new QrCode('systemweb'))
            ->setLabel(new Label(
                'noreply@systemweb.no',
                null,
                null,
                LabelInterface::ALIGN_CENTER,
            ));
        $out = $writer->writeString($qrCode);
        $this->assertEquals(file_get_contents(codecept_data_dir('data-label-center.png')), $out);

        $qrCode = (new QrCode('systemweb'))
            ->setLabel(new Label(
                'noreply@systemweb.no',
                null,
                null,
                LabelInterface::ALIGN_LEFT,
            ));

        $out = $writer->writeString($qrCode);
        $this->assertEquals(file_get_contents(codecept_data_dir('data-label-left.png')), $out);

        $qrCode = (new QrCode('systemweb'))
            ->setLabel(new Label(
                'noreply@systemweb.no',
                null,
                null,
                LabelInterface::ALIGN_RIGHT,
            ));

        $out = $writer->writeString($qrCode);
        $this->assertEquals(file_get_contents(codecept_data_dir('data-label-right.png')), $out);
    }

    public function testValidateImageStringOutput()
    {
        $this->expectException(ValidationException::class);

        $writer = new PngWriter();
        $qrCode = new QrCode('noreply@systemweb.no');
        $imageString = $writer->writeString($qrCode);

        $writer->validateOutput($imageString, $qrCode->setText('systemweb'));
    }
}
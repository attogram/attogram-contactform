<?php // Attogram Framework - Contact Form Module - Base Test v0.0.1

use PHPUnit\Framework\TestCase;

class BaseTest extends PHPUnit\Framework\TestCase
{
    public $attogram;

    public function getMockAttogram()
    {
        if (isset($this->attogram)) {
            return $this->attogram;
        }
        $attogram_class = __DIR__ . '/../vendor/attogram/attogram-framework/attogram/attogram.php';
        include_once($attogram_class);
        $this->attogram = $this->createMock('\attogram');
        return $this->attogram;
    }

    public function testToBeWrittenRealSoonNow()
    {
        //$mockAttogram = $this->getMockAttogram();
        $this->assertTrue( true, 'true not true!' );
    }

}

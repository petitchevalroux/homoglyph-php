<?php
use PHPUnit\Framework\TestCase;
use \Pcr\Homoglyph;

final class HomoglyphTest extends TestCase
{
    /**
     * Return an Homoglyph instance
     *
     * @return Homoglyph
     */
    private function getInstance()
    {
        return new Homoglyph();
    }

    public function testInstance()
    {
        $this->assertInstanceOf(
            Homoglyph::class,
            $this->getInstance(),
            'getInstance return an instance of Homoglyph::class'
        );
    }


    public function testGetCharactersMapReturnNonEmptyArray()
    {
        $charactersMap = $this->getInstance()->getCharactersMap();
        $this->assertTrue(is_array($charactersMap) && !empty($charactersMap), 'getCharactersMap return a non empty array');
    }

    public function testReplaceLetters()
    {
        $this->assertEquals('abcdefghijklmnopqrstuvwxyz', $this->getInstance()->replace('abcdefghijklmnopqrstuvwxyz'));
        $this->assertEquals('ABCDEFGHIJKLMNOPQRSTUVWXYZ', $this->getInstance()->replace('ABCDEFGHIJKLMNOPQRSTUVWXYZ'));
    }

    public function testReplaceNumbers()
    {
        $this->assertEquals('0123456789', $this->getInstance()->replace('0123456789'));
    }

    public function testReplaceCyrillic()
    {
        $this->assertEquals('abcdehijopsvwxy', $this->getInstance()->replace('аЬсԁеһіјорѕѵѡху'));
        $this->assertEquals('ABCEGHlJKMOPSTVXY', $this->getInstance()->replace('АВСЕԌНІЈКМОРЅТѴХҮ'));
    }

    public function testFull­WidthLatin()
    {
        $this->assertEquals('abcdefghijklmnopqrstuvwxyz', $this->getInstance()->replace('ａｂｃｄｅｆｇｈｉｊｋｌｍｎｏｐｑｒｓｔｕｖｗｘｙｚ'));
        $this->assertEquals('ABCDEFGHIJKLMNOPQRSTUVWXYZ', $this->getInstance()->replace('ＡＢＣＤＥＦＧＨＩＪＫＬＭＮＯＰＱＲＳＴＵＶＷＸＹＺ'));
    }
}

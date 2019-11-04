<?php
namespace Pcr;

class Homoglyph
{

    /**
     * Replace homoglyph
     *
     * @param string $str
     * @return string
     */
    public function replace($str)
    {
        $map = $this->getCharactersMap();

        return \strtr($str, $this->getCharactersMap());
    }
    /**
     * Return characters map
     *
     * @return array
     */
    public function getCharactersMap()
    {
        if (!isset($this->charactersMap)) {
            $this->charactersMap = include realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'characters-map.php');
            // Do not replace 0 => O
            unset($this->charactersMap['0']);
            // Do not replace I => l
            unset($this->charactersMap['I']);
            // Do not replace m => rn
            unset($this->charactersMap['m']);
            // Do not replace 1 => l
            unset($this->charactersMap['1']);
            // Fullwidth latin
            $this->charactersMap['Ａ'] = 'A';
            $this->charactersMap['Ｂ'] = 'B';
            $this->charactersMap['Ｃ'] = 'C';
            $this->charactersMap['Ｄ'] = 'D';
            $this->charactersMap['Ｅ'] = 'E';
            $this->charactersMap['Ｆ'] = 'F';
            $this->charactersMap['Ｇ'] = 'G';
            $this->charactersMap['Ｈ'] = 'H';
            $this->charactersMap['Ｉ'] = 'I';
            $this->charactersMap['Ｊ'] = 'J';
            $this->charactersMap['Ｋ'] = 'K';
            $this->charactersMap['Ｌ'] = 'L';
            $this->charactersMap['Ｍ'] = 'M';
            $this->charactersMap['Ｎ'] = 'N';
            $this->charactersMap['Ｏ'] = 'O';
            $this->charactersMap['Ｐ'] = 'P';
            $this->charactersMap['Ｑ'] = 'Q';
            $this->charactersMap['Ｒ'] = 'R';
            $this->charactersMap['Ｓ'] = 'S';
            $this->charactersMap['Ｔ'] = 'T';
            $this->charactersMap['Ｕ'] = 'U';
            $this->charactersMap['Ｖ'] = 'V';
            $this->charactersMap['Ｗ'] = 'W';
            $this->charactersMap['Ｘ'] = 'X';
            $this->charactersMap['Ｙ'] = 'Y';
            $this->charactersMap['Ｚ'] = 'Z';

            $this->charactersMap['ａ'] = 'a';
            $this->charactersMap['ｂ'] = 'b';
            $this->charactersMap['ｃ'] = 'c';
            $this->charactersMap['ｄ'] = 'd';
            $this->charactersMap['ｅ'] = 'e';
            $this->charactersMap['ｆ'] = 'f';
            $this->charactersMap['ｇ'] = 'g';
            $this->charactersMap['ｈ'] = 'h';
            $this->charactersMap['ｉ'] = 'i';
            $this->charactersMap['ｊ'] = 'j';
            $this->charactersMap['ｋ'] = 'k';
            $this->charactersMap['ｌ'] = 'l';
            $this->charactersMap['ｍ'] = 'm';
            $this->charactersMap['ｎ'] = 'n';
            $this->charactersMap['ｏ'] = 'o';
            $this->charactersMap['ｐ'] = 'p';
            $this->charactersMap['ｑ'] = 'q';
            $this->charactersMap['ｒ'] = 'r';
            $this->charactersMap['ｓ'] = 's';
            $this->charactersMap['ｔ'] = 't';
            $this->charactersMap['ｕ'] = 'u';
            $this->charactersMap['ｖ'] = 'v';
            $this->charactersMap['ｗ'] = 'w';
            $this->charactersMap['ｘ'] = 'x';
            $this->charactersMap['ｙ'] = 'y';
            $this->charactersMap['ｚ'] = 'z';
        }
        return $this->charactersMap;
    }
}

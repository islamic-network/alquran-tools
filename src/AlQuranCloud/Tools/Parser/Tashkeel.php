<?php
namespace AlQuranCloud\Tools\Parser;

class Tashkeel
{

    const HARAKAT = "َ  ً ِ ٍ ُ ٌ ْ ّ ٰ ";
    public $harakat;

    /**
     * [__construct description]
     */
    public function __construct()
    {
        $this->harakat = explode(' ', self::HARAKAT);
    }

    /**
     * Creates all variants
     * @param  string $letter
     * @return array
     */
    public function get($letter)
    {
        $v[] = $letter;
        foreach ($this->harakat as $h) {
            if ($h !== '') {
              $v[] = $letter . $c;
            }
        }
        $v[] = $letter . "ُّ";
        $v[] = $letter . "ِّ";
        $v[] = $letter . "َّ";

        return $v;

    }
}

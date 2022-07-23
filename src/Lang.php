<?php

namespace Interpert;

class Lang
{
    /**
     * @param $word
     * @return string
     */
    public static function translate($word): string
    {
        $translator = new Translator();
        return $translator->perform($word)->get();
    }
}
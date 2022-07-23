<?php

namespace Interpert;

class Translator
{

    use Reader;

    private $word;

    /**
     * @param $word
     * @return Translator
     */
    public function perform($word): Translator
    {
        return (new static)
            ->sanitize($word)
            ->find();
    }

    /**
     * @return mixed
     */
    public function get()
    {
        return $this->word;
    }

    /**
     * @param $context
     * @return Translator
     */
    protected function sanitize($context): Translator
    {
        $this->word = str_replace([' ', '-', '_'], '', trim($context));
        return $this;
    }

    /**
     * @return Translator
     */
    protected function find(): Translator
    {
        $resource = $this->read();
        $this->word = $resource[$this->word];
        return $this;
    }
}
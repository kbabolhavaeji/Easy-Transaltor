<?php

namespace SimpleTranslator;

trait Configs
{
    /**
     * @return string[]
     */
    public function configs(): array
    {

        return [
            'language' => 'fa', # name of translation file
            'type' => '.json', # type of translate resource
            'root' => __DIR__.'/lib', # address of translation file
        ];

    }
}
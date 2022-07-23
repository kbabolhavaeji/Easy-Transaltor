<?php

namespace Interpert;

trait Reader
{
    use Configs;

    /**
     * @return mixed
     */
    public function read()
    {
        $configs = $this->configs();
        $resource = file_get_contents($configs['root'].DIRECTORY_SEPARATOR.$configs['language'].$configs['type']);
        return json_decode($resource, true);
    }
}
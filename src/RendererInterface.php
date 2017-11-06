<?php

namespace VekaServer\Interfaces;

interface RendererInterface
{

    /**
     * @param string $templatePath
     * @param array|null $data
     * @return string
     */
    public function render( string $templatePath, array $data = array()): string;

}
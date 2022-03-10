<?php

namespace VekaServer\Interfaces;

interface PluginInterface
{

    public static function getPathView():array;

    public static function getPathJS():string;

    public static function getPathCSS():string;

}

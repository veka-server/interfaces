<?php

namespace VekaServer\Interfaces;

interface PluginInterface
{

    public static function getPathView():array;

    public static function getPathJS():array;

    public static function getPathCSS():array;

}

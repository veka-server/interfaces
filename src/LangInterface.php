<?php

namespace VekaServer\Interfaces;

interface LangInterface
{
    public function get($key);

    public function has($key): bool;

    public function set($key, $lang, $traduction);

    public function addLang($lang);
    /**
     * @return string
     */
    public function getLang(): string;

    /**
     * @param string $lang
     */
    public function setLang(string $lang): void;

}

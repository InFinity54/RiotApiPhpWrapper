<?php

namespace Riot;

class RiotConstant
{
    private string $lang;

    public function __construct(string $lang = "en_US")
    {
        $this->lang = $lang;
        putenv("LANG=".$lang);
        setlocale(LC_ALL, $lang);
    }
}
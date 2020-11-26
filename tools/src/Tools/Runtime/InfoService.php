<?php


namespace Tools\Runtime;


class InfoService implements InfoInterface
{
    private function __construct()
    {
    }

    public static function getRuntimeInfo(): InfoInterface
    {
        return new InfoService();
    }

    public function currentExtension(): array
    {
        extension_loaded();
    }

}
<?php


namespace Tools\File;

interface ReadInterface
{
    public function readFileContent(string $file, string $type): array;
}
<?php


namespace Tools;


interface Tool
{
    public function getToolInstance(string $toolName);
}
<?php

namespace Tools\File;

class ReadService implements ReadInterface
{

    public function readFileContent(string $file, string $type): array
    {
        $fileContents = [];
        if ($this->canRead($file, $type)) {
            $fileContents = $this->{'read'.ucfirst($type)}($file);
        }
        return $fileContents;
    }

    private function readCSV(string $file): array
    {
        $rows = array_map('str_getcsv', file($file));
        $header = array_shift($rows);
        $csv = [];
        foreach ($rows as $row) {
            $csv[] = array_combine($header, $row);
        }
        return $csv;
    }

    private function readIni(string $file): array
    {

    }

    private function readYml(string $file): array
    {

    }

    private function canRead(string $file, string $type): bool
    {
        return in_array($type, $this->currentSupportedReadTypes())
            && file_exists($type) && is_readable($type);
    }

    private function currentSupportedReadTypes(): array
    {
        $currentLoadedExtensions = ['ini', 'csv', 'yml', 'yaml'];
        $useExtensionsReadTypes = ['xml', 'zip', 'json'];
        foreach ($useExtensionsReadTypes as $extension) {
            if (extension_loaded($extension)) {
                $currentLoadedExtensions[] = $extension;
            }
        }
        return $currentLoadedExtensions;
    }
}
<?php

namespace lib;

class db {
    private $book = [];

    function __construct($fname) {
        $this->load($fname);
    }

    function load($fname) {
        if (!is_file($fname))
            return false;
        
        $file = str_replace("\n", "\n;", file_get_contents($fname));
        $this->book = [];
        
        foreach (array_chunk(str_getcsv($file, ";"), 5) as $line) {
            if (!isset($line[1]))
                continue;
            $this->book[$line[0]] = [
                "id" => $line[0],
                "name" => $line[4],
                "author" => $line[3],
                "region" => $line[1],
                "category" => $line[2]
            ];
        }
    }

    function has($book) {
        if (isset($this->book[$book]))
            return true;
        
        return false;
    }

    function getInfo($book) {
        if ($this->has($book))
            return $this->book[$book];
        
        return false;
    }

    function getAll() {
        return $this->book;
    }
}
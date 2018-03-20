<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'camille', 'camille');
        return $db;
    }
}
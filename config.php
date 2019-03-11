<?php

const DNS = 'mysql:dbname=hew;host=localhost;charset=utf8mb4';
const USERNAME = 'root';
const PASSWORD = '';
const DRIVER_OPTIONS = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
];
?>
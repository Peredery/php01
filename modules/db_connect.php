<?php

$link = mysqli_connect('remotemysql.com', 'Oz0ycTyNPX', 'Spr6dixj4t', 'Oz0ycTyNPX');

// catch db errors

if (mysqli_connect_errno()) {
    echo 'DB connect error: ' .mysqli_connect_errno() . ' ' . mysqli_connect_error();
    exit(); 
}

// Set UTF8

mysqli_set_charset($link, 'utf8');

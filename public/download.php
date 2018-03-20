<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 03/20/2018
 * Time: 14:28
 */
$file_url = 'download/DeGokkers.exe';
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"DeGokkers.exe\"");
header("Location: $file_url");
?>
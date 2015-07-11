<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require './PHPZIP.Class.php';

$archive   = new PHPZIP();
$zip   = dirname(__FILE__).'/test.zip';
$dir  = dirname(__FILE__).'/test/';

$archive->zip($dir,$zip); // 把test目录中的文件压缩到test.zip中

$archive->unzip($zip,$dir); // 把test.zip中的文件解压到test目录中
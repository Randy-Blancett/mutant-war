<?php
// Constants
$phpSrc = __DIR__ . "/../src/main/php/";
$webSrc = __DIR__ . "/../src/www/";
$buildDir = __DIR__ . "/../build";

// Create Phar
$phar = new Phar ( $buildDir . "/MutantWar.phar", FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME, "mw.phar" );

// Add Files
$phar->buildFromDirectory ( $buildDir, '/.php$/' );
$phar->buildFromDirectory ( $webSrc );

// Create Stub
$phar->setStub ( $phar->createDefaultStub ( "index.php" ) );
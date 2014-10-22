<?php
// Constants
$phpSrc = __DIR__ . "/../src/main/php/";
$webSrc = __DIR__ . "/../src/main/www/";
$buildDir = __DIR__ . "/../build";

$p = new Phar ( $buildDir . "/MutantWar.phar", FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME, 'MutantWar.phar' );
// issue the Phar::startBuffering() method call to buffer changes made to the archive until you issue the Phar::stopBuffering() command
$p->startBuffering ();

// set the Phar file stub
// the file stub is merely a small segment of code that gets run initially when the Phar file is loaded,
// and it always ends with a __HALT_COMPILER()
$p->setStub ( '<?php Phar::mapPhar(); include "phar://MutantWar.phar/index.php"; __HALT_COMPILER(); ?>' );

// Adding files to the archive
$p ['text.txt'] = 'This is a text file';
// Adding files to an archive using Phar::buildFromDirectory()
// adds all of the PHP files in the stated directory to the Phar archive
$p->buildFromDirectory ( $phpSrc, '/.php$/' );
$p->buildFromDirectory ( $webSrc );

// Stop buffering write requests to the Phar archive, and save changes to disk
$p->stopBuffering ();
echo "my.phar archive has been saved";

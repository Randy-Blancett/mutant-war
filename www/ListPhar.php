<?php
$p = new Phar ( 'MutantWar.phar', 0 );
// Phar extends SPL's DirectoryIterator class
foreach ( new RecursiveIteratorIterator ( $p ) as $file )
{
    // $file is a PharFileInfo class, and inherits from SplFileInfo
    echo $file->getPathName () . "<br/>\n";
}
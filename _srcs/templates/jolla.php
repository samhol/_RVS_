<?php

use Sphp\MVC\Filesystem\LinkListGenerator;

$gen = new LinkListGenerator();
$gen->getFileParser()->setSortingOrder(\SCANDIR_SORT_DESCENDING);
$gen->loadFiles('dokumentit/jolla');
$gen->getLinkGen()->setDisplayName(function(SplFileInfo $file) {
  $year = $file->getBasename('.' . $file->getExtension());
  return "Vuosi $year";
});

echo "\n\n$gen\n\n";

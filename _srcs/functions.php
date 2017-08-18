<?php

use Sphp\MVC\Filesystem\HyperlinkGenerator;

/**
 * 
 * @param  string $dokumentti
 * @param  string $teksti
 * @return string
 */
function dokumenttiLinkki($dokumentti, $teksti): string {
  $flg = new HyperlinkGenerator();
  $flg->setFile(new \SplFileInfo("dokumentit/$dokumentti"));
  $flg->setDisplayName($teksti);
  return $flg->generate();
}

function jollaLehdet(){
  include('_srcs/templates/jolla.php');
}

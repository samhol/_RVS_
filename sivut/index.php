<?php

namespace Sphp\Html\Foundation\Sites\Media\Orbit;
use Sphp\Html\Media\Img;
$sailing = new \FilesystemIterator('kuvarulla');
$arr = iterator_to_array($sailing);

$o = new Orbit();
//$o->accessibility(false);
$size = new \Sphp\Html\Media\Size(null, 150);
foreach($arr as $img) {
  $o->appendFigure(Img::scaleToFit($img, $size));
}
$o->printHtml();
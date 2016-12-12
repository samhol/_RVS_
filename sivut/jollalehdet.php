<?php

use Sphp\Core\PathFinder as PathFinder;
use Sphp\Util\FileUtils as FileUtils;

$pathFinder = new PathFinder();
$jolla = FileUtils:: dirToArray($pathFinder->local("pdf/jolla"));
$jolla = array_reverse($jolla);
?>
<div>
  <div class="orbit" role="region" aria-label="Jolla lehdet" data-orbit data-auto-play="false">
    <ul class="orbit-container">
    <button class="orbit-previous"><span class="show-for-sr">Edellinen</span>&#9664;&#xFE0E;</button>
    <button class="orbit-next"><span class="show-for-sr">Seuraava</span>&#9654;&#xFE0E;</button>
      <?php
      foreach ($jolla as $i => $j) {
        if ($i == 0) {
          echo '<li class="is-active orbit-slide">';
        } else {
          echo '<li class="orbit-slide">';
        }
        echo '<div class="flex-video"><iframe src = "/ViewerJS/#../pdf/jolla/' . $j . '" allowfullscreen webkitallowfullscreen height="100"></iframe></div></li>';
      }
      ?>
      <!--<li class="is-active orbit-slide">
        <div class="callout">
          <div class="flex-video">
            tyurtyutryurtyutryurtyurtyu
          </div>
        </div>
      </li>
      <li class="orbit-slide">
        <div class="callout">
          <div class="flex-video">
           tyrutyutryurtyu
          </div>
        </div>
      </li>
      <li class="orbit-slide">
        <div class="callout">
          <div class="flex-video">
            rtyutyutryurtyutryurtyurty
          </div>
        </div>
      </li>-->
    </ul>
    <nav class="orbit-bullets">
      <?php
      foreach ($jolla as $i => $j) {
        if ($i == 0) {
          echo '<button class="is-active" data-slide="' . $i . '"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>';
        } else {
          echo '<button data-slide="' . $i . '"><span class="show-for-sr">Second slide details.</span></button>';
        }
      }
      ?>
    </nav>
  </div>
</div>
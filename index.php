<?php
//require_once 'vendor/autoload.php';

error_reporting(E_ALL);
ini_set("display_errors", "1");
date_default_timezone_set("Europe/Helsinki");
mb_internal_encoding("UTF-8");

include_once("sphp/settings.php");
include_once("_templates/htmlHead.php");

?>
<div class="off-canvas-wrapper">
  <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

    <!-- off-canvas title bar for 'small' screen -->
    <div class="title-bar" data-responsive-toggle="widemenu" data-hide-for="medium">
      <div class="title-bar-left">
        <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
        <span class="title-bar-title">Foundation</span>
      </div>
      <div class="title-bar-right">
        <span class="title-bar-title">Login</span>
        <button class="menu-icon" type="button" data-open="offCanvasRight"></button>
      </div>
    </div>

    <!-- off-canvas left menu -->
    <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
      <ul class="vertical dropdown menu" data-dropdown-menu>
        <li><a href="left_item_1">Left item 1</a></li>
        <li><a href="left_item_2">Left item 2</a></li>
        <li><a href="left_item_3">Left item 3</a></li>
      </ul>
    </div>

    <!-- off-canvas right menu -->
    <div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
      <ul class="vertical dropdown menu" data-dropdown-menu>
        <li><a href="right_item_1">Right item 1</a></li>
        <li><a href="right_item_2">Right item 2</a></li>
        <li><a href="right_item_3">Right item 3</a></li>
      </ul>
    </div>

    <!-- "wider" top-bar menu for 'medium' and up -->
    <div id="widemenu" class="top-bar">
      <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
          <li class="menu-text">Foundation</li>
          <li class="has-submenu">
            <a href="#">Item 1</a>
            <ul class="menu submenu vertical" data-submenu>
              <li><a href="left_wide_11">Left wide 1</a></li>
              <li><a href="left_wide_12">Left wide 2</a></li>
              <li><a href="left_wide_13">Left wide 3</a></li>
            </ul>
          </li>
          <li class="has-submenu">
            <a href="#">Item 2</a>
            <ul class="menu submenu vertical" data-submenu>
              <li><a href="left_wide_21">Left wide 1</a></li>
              <li><a href="left_wide_22">Left wide 2</a></li>
              <li><a href="left_wide_23">Left wide 3</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu">
          <li><input type="search" placeholder="Search"></li>
          <li><button class="button">Search</button></li>
        </ul>
      </div>
    </div>

    <!-- original content goes in this container -->
    <div class="off-canvas-content" data-off-canvas-content>
      <div class="row column">
        <pre>
          <?php
          use Sphp\Html\Foundation\Sites\Containers\ExceptionCallout;
          use Sphp\Html\Container;
          print_r($links);
          $load = function($page) {
            try {
              ob_start();
              $examplePath = "sivut/" . $page . ".php";
              if (is_file($examplePath)) {
                (new Container)->appendMdFile($examplePath)->printHtml();
              } else {
                throw new \InvalidArgumentException("the path $examplePath contains no executable PHP script");
              }
              $content = ob_get_contents();
            } catch (\Exception $e) {
              $content .= new ExceptionCallout($e);
            }
            ob_end_clean();
            echo $content;
          };
          $load($page);
          ?>

        </pre>
      </div>
    </div>

    <!-- close wrapper, no more content after this -->
  </div>
</div>

<?php
$html->documentClose();
?>

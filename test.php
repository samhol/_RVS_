<?php
//require_once 'vendor/autoload.php';

error_reporting(E_ALL);
ini_set("display_errors", "1");
date_default_timezone_set("Europe/Helsinki");
mb_internal_encoding("UTF-8");

include_once("sphp/settings.php");
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation Starter Template</title>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.0/css/foundation.min.css">-->
    <link rel="stylesheet" href="sphp/css/base.css">
  </head>
  <div class="off-canvas-wrapper">
    <!-- off-canvas left menu -->
    <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
      <button class="close-button" aria-label="Close menu" type="button" data-close>
        <span aria-hidden="true">&times;</span>
      </button>
      <ul class="vertical menu">
        <li><a href="left_item_1">Left item 1</a></li>
        <li><a href="left_item_2">Left item 2</a></li>
        <li><a href="left_item_3">Left item 3</a></li>
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
      <!-- off-canvas title bar for 'small' screen -->
      <div class="title-bar" data-responsive-toggle="widemenu" data-hide-for="medium">
        <div class="title-bar-left">
          <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
          <span class="title-bar-title">Foundation</span>
        </div>
        <div class="title-bar-right">
        </div>
      </div>
      <div class="row column">
        <img src="http://placehold.it/2000x3000" alt="" />
      </div>
    </div>
  </div>
  <script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.0/js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body></html>
<?php
//$html->documentClose();
?>

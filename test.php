<?php
//require_once 'vendor/autoload.php';

error_reporting(E_ALL);
ini_set("display_errors", "1");
date_default_timezone_set("Europe/Helsinki");
mb_internal_encoding("UTF-8");

include_once("sphp/settings.php");
$links = \Symfony\Component\Yaml\Yaml::parse(file_get_contents('links/mainLinks.yml'));
$top_bar_links = \Symfony\Component\Yaml\Yaml::parse(file_get_contents('links/top_bar_links.yml'));
$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
if ($page === null) {
  $page = 'index';
} else {

  $page = str_replace(['.', '/'], '', $page);
}
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation Starter Template</title>
    <link rel="stylesheet" href="sphp/css/base.css">
  </head>
  <div class="off-canvas-wrapper">
    <!-- off-canvas left menu -->
    <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
      <button class="close-button" aria-label="Close menu" type="button" data-close>
        <span aria-hidden="true">&times;</span>
      </button>
      <?php echo Sphp\Html\Foundation\Sites\Navigation\Factory::buildMenu($links['menu'])->addCssClass('vertical') ?>
    </div>


    <!-- "wider" top-bar menu for 'medium' and up -->
    <div id="widemenu" class="top-bar">
      <div class="top-bar-left">
        <?php echo Sphp\Html\Foundation\Sites\Navigation\Factory::buildMenu($top_bar_links['menu'])->addCssClass('') ?>
      </div>
      <div class="top-bar-right">
      </div>
    </div>

    <!-- original content goes in this container -->
    <div class="off-canvas-content" data-off-canvas-content>
      <!-- off-canvas title bar for 'small' screen -->
      <div class="top-row">
        <div class="row column">
          <a href="http://veneseura.samiholck.com/" title="Etusivulle">
            <img src="srcs/img/logo.png" alt="logo">
            <span>Raision Veneseura ry</span></a>
        </div>
      </div>
      <div class="title-bar" data-responsive-toggle="widemenu" data-hide-for="medium">
        <div class="title-bar-left">
          <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
          <span class="title-bar-title">Foundation</span>
        </div>
        <div class="title-bar-right">
        </div>
      </div>
      <div class="row column">
        <?php

        use Sphp\Html\Foundation\Sites\Containers\ExceptionCallout;
        use Sphp\Html\Container;

//print_r($links);
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

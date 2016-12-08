<?php
//require_once 'vendor/autoload.php';

error_reporting(E_ALL);
ini_set("display_errors", "1");
date_default_timezone_set("Europe/Helsinki");
mb_internal_encoding("UTF-8");

include_once("sphp/settings.php");
$loader = new Twig_Loader_Filesystem(["twigs"]);
$twig = new Twig_Environment($loader, array(
    'cache' => 'twig_compilation_cache', "auto_reload" => true,
        ));
//$template = $twig->loadTemplate('index.php');
//echo $template->render();
require_once 'vendor/autoload.php';
require_once 'links.php';
$parsedLinks = [];

function linkParser(array $links) {
    $lnk = [];
  foreach ($links as $id => $link) {
    if (array_key_exists("heading", $link)) {
      // unset($links[$id]);
      $lnk[$id] = ["menu-text" => $link["heading"]];
    } else if (array_key_exists("link", $link) || array_key_exists("url", $link)) {
      if (array_key_exists("url", $link)) {
        $lnk[$id]["link"] = $link["url"];
      }
      else if ($link["link"] == "index" || $link["link"] == "") {
        $lnk[$id]["link"] = "?page=index";
      } else {
        $lnk[$id]["link"] = "?page=" . $link["link"];
      }
      if (!array_key_exists("text", $link)) {
        $lnk[$id]["text"] = $link["link"];
      } else {
        
        $lnk[$id]["text"] = $link["text"];
      }
      if (!array_key_exists("target", $link)) {
        $lnk[$id]["target"] = "_self";
      }
    }
  }
  return $lnk;
}
echo "<pre>";
$a = file_get_contents('_templates/links.yml');
$parsed = \Symfony\Component\Yaml\Yaml::parse($a);
print_r($parsed);
$mdParser = new ParsedownExtra();

function executeToString($path) {
  try {
    ob_start();
    include($path);
    $content = ob_get_contents();
  } catch (\Exception $e) {
    $content = $e;
  }
  ob_end_clean();
  return $content;
}

$pageName = filter_input(\INPUT_GET, "page");
$lnk = linkParser($links);
$titleBarLinks = linkParser($titleBarLinks);
$head = $twig->loadTemplate('head.twig');
echo $head->render(["page_title" => $pageName]);

$topbar_offcanvas = $twig->loadTemplate('topbar_offcanvas.twig');
echo $topbar_offcanvas->render(["links" => $lnk, "titleBarLinks" => $titleBarLinks]);


require_once("srcs/templates/offcanvas-content.php");

//$footer = $twig->loadTemplate('footer.twig');

?>

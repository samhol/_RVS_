<?php

namespace Sphp\Html\Tables;

use Sphp\Core\PathFinder as PathFinder;

$db = new \SQLite3((new PathFinder)->local("srcs/db/contacts"));

$stmt = $db->prepare('SELECT nimi, puhelin, email from hlo Where hallituksessa = "true"');

$result = $stmt->execute();
$hallitus = [];
$thallitus = new Table();
$thallitus->thead()->append(["Nimi", "Puhelin", "Sähköposti"]);
while ($arr = $result->fetchArray(SQLITE3_ASSOC)) {
  $hallitus[] = $arr;
  $thallitus->tbody()->append($arr);
}

$thallitus->printHtml();

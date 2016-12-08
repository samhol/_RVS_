<?php

namespace Sphp\Html\Tables;

use Sphp\Core\PathFinder as PathFinder;

$db = new \SQLite3((new PathFinder)->local("srcs/db/contacts"));

$stmt = $db->prepare('SELECT * from katsastajat');

$result = $stmt->execute();
$katsastajat = [];
$t = new Table();
$t->thead()->append(["Nimi", "Puhelin", "Sähköposti"]);
while ($arr = $result->fetchArray(SQLITE3_ASSOC)) {
  $katsastajat[] = $arr;
  $t->tbody()->append($arr);
}

$t->printHtml();
?>

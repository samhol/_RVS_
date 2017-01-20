<?php

namespace Sphp\Html\Foundation\Sites\Navigation;

$nav = new AccordionMenu();
$nav->addCssClass('sidenav');
echo Factory::buildMenu($links['menu'], $nav);

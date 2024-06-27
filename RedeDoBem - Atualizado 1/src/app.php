<?php

$pagina = router();

require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . $pagina;
require_once __DIR__ . "/templates/fotter.php";
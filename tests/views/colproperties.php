<?php

/**
 * PHPPgAdmin v6.0.0-RC9
 */

// Include application functions
function colpropertiesFactory($container) { $do_render = false ;
if (!defined('BASE_PATH')) {
    require_once '../../src/lib.inc.php';
    $do_render = true;
}
$controller = new \PHPPgAdmin\Controller\ColpropertiesController($container);
if ($do_render) {
    $controller->render();
}
return $controller; }

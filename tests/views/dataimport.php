<?php

/**
 * PHPPgAdmin v6.0.0-RC9
 */

function dataimportFactory($container) { $do_render = false ;
if (!defined('BASE_PATH')) {
    require_once '../../src/lib.inc.php';
    $do_render = true;
}
$controller = new \PHPPgAdmin\Controller\DataimportController($container);
if ($do_render) {
    $controller->render();
}
return $controller; }

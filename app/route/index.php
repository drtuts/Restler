<?php

    require_once '../../vendor/restler.php';
    use Luracast\Restler\Restler;

Defaults::$smartAutoRouting = false;


$r = new Restler();
$r->addAPIClass('Route');
$r->handle();

?>
<?php
include "controller/SiteController.php";

$sc = new SiteController();
$action = "index";
if (isset($_GET['action']))
    $action = $_GET['action'];

if (method_exists($sc, $action)) {
    $sc->$action();
}
else
{
    $sc->index();;
}

?>
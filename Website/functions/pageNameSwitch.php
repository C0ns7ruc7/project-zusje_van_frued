<?php

$currentPageTitle = strtolower(basename($_SERVER['PHP_SELF']));

switch ($currentPageTitle) {
    case "index.php":
        $title = "Home";
        break;
    case "products.php":
        $title = "Producten";
        break;
    case "offers.php":
        $title = "Acties";
        break;
    case "events.php":
        $title = "Evenementen";
        break;
    case "create_event.php":
        $title = "Evenement Maken";
        break;
    default:
        $title = "Somewhere";
        break;
}

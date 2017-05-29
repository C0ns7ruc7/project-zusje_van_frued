<?php

$currentPageTitle = strtolower(basename($_SERVER['PHP_SELF']));

switch ($currentPageTitle) {
    case "index.php":
        $title = "Home";
        break;
    case "coaching.php":
        $title = "Coaching";
        break;
    case "contact.php":
        $title = "Contact";
        break;
    case "blog.php":
        $title = "Blog/Vlog";
        break;
    case "zusje.php":
        $title = "Zusje";
        break;
    case "nieuws.php":
        $title = "Nieuwsblad";
        break;
    default:
        $title = "Somewhere";
        break;
}

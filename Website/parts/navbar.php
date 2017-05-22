<?php
include('functions/pageNameSwitch.php');
?>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <ul class="nav navbar-nav">
        <li<?php if ($currentPageTitle === "index.php") { echo " class=\"active\" ";} ?>>
            <a href="index.php">Home</a>
        </li>
        <li<?php if ($currentPageTitle === "coaching.php") { echo " class=\"active\" ";} ?>>
            <a href="coaching.php">coaching</a>
        </li>
        <li<?php if ($currentPageTitle === "zusje.php") { echo " class=\"active\" ";} ?>>
            <a href="zusje.php">Wie is Zusje</a>
        </li>
        <li<?php if ($currentPageTitle === "blog.php") { echo " class=\"active\" ";} ?>>
            <a href="blog.php">Blog/Vlog</a>
        </li>
        <li<?php if ($currentPageTitle === "contact.php") { echo " class=\"active\" ";} ?>>
            <a href="contact.php">Contact</a>
        </li>
        <li<?php if ($currentPageTitle === "nieuws.php") { echo " class=\"active\" ";} ?>>
            <a href="nieuws.php">Nieuwsbrief</a>
        </li>
    </ul>
</nav>

</nav>
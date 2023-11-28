<?php $active = $_SERVER["REQUEST_URI"]; ?>

<nav>
    <a class="logo" href="/">Aeroport</a>
    <ul class="main-menu">
        <li class="item">
            <a <?= $active == '/pasageri.php'?"class='active'":"";?> href="pasageri.php">Pasageri</a>
        </li>
    </ul>
</nav>
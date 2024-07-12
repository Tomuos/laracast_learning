<?php

$_SESSION['name'] = 'Tom';

view("index.view.php", [
    'heading' => 'Home',
]);


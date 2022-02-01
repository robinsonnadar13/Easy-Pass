<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname= Enter Database Name here', 'Enter Username here','Enter Password here');

// See the "errors" folder for details...

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


<?php

$generatedRoutes = __DIR__ . "/OpenApiGenerated/routes.php";
if (file_exists($generatedRoutes)) { // prevents your app and artisan from breaking if there is no autogenerated Route file for some reason.
    require $generatedRoutes;
}
<?php

require __DIR__ . '/../vendor/autoload.php';

$sources = new \livetyping\hermitage\app\Sources([
    __DIR__ . '/../config/main.php',
]);

\livetyping\hermitage\bootstrap\load_dotenv(dirname(__DIR__));
\livetyping\hermitage\bootstrap\app($sources)->run();

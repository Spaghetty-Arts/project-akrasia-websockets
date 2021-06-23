<?php

require './vendor/autoload.php';

use Chat\ChatServer;

$app = new Ratchet\App('https://vigorous-shirley-5921e5.netlify.app', 3000);
$app->route('/chat', new ChatServer, ['*']);
$app->run();

<?php

require './vendor/autoload.php';

use Chat\ChatServer;

$app = new Ratchet\App('localhost', 3000);
$app->route('/chat', new ChatServer, ['*']);
$app->run();

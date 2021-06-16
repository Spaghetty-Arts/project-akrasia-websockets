<?php

require './vendor/autoload.php';

use Chat\ChatServer;

$app = new Ratchet\App('project-akrasia-websockets.herokuapp.com', 9990);
$app->route('/chat', new ChatServer, ['*']);
$app->run();

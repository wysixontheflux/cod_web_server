<?php

require_once('../loader.php');
require_once '../api/controllers/server/InfoServer.php';

$server = new InfoServer();
$servers = $server->getServer();

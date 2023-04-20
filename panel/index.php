<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <h1>
            Create server
        </h1>
        <form>
            <input type="text" name="name" placeholder="Server name">
            <input type="text" name="ip" placeholder="Server IP">
            <input type="text" name="port" placeholder="Server port">
            <input type="text" name="rcon" placeholder="Server RCON">
            <input type="text" name="status" placeholder="Server status">
            <input type="text" name="maxplayers" placeholder="Server maxplayers">
            <input type="text" name="players" placeholder="Server players">
            <input type="text" name="map" placeholder="Server map">
            <input type="text" name="game" placeholder="Server game">
            <input type="text" name="version" placeholder="Server version">
            <input type="submit" value="Create">
        </form>
    </section>
</body>
</html>



<?php

require_once(__DIR__ . '/../api/controllers/server/InfoServer.php');

$server = new InfoServer();
$server->getServer();

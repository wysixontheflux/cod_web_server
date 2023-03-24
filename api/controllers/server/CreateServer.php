<?php

require_once 'api/utils/Database.php';

class CreateServer extends Database
{
    private $server;
    private $server_id;
    private $server_name;
    private $server_ip;
    private $server_port;
    private $server_rcon;
    private $server_status;
    private $server_maxplayers;
    private $server_players;
    private $server_map;
    private $server_game;
    private $server_version;

    public function __construct()
    {
        parent::__construct();

        $this->server = $this->connectDB();

/*      $this->server_id = $this->getServerById($id);*/

        $this->server_name = $this->server_id['name'];

        $this->server_ip = $this->server_id['ip'];

        $this->server_port = $this->server_id['port'];

        $this->server_rcon = $this->server_id['rcon'];

        $this->server_status = $this->server_id['status'];

        $this->server_maxplayers = $this->server_id['maxplayers'];

        $this->server_players = $this->server_id['players'];

        $this->server_map = $this->server_id['map'];

        $this->server_game = $this->server_id['game'];

        $this->server_version = $this->server_id['version'];
    }

    public function createServer($name, $ip, $port, $rcon)
    {
        $query = $this->server->prepare("INSERT INTO servers (name, ip, port, rcon) VALUES (:name, :ip, :port, :rcon)");
        $query->bindParam(":name", $name);
        $query->bindParam(":ip", $ip);
        $query->bindParam(":port", $port);
        $query->bindParam(":rcon", $rcon);
        $query->execute();
    }
}
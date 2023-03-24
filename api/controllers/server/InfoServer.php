<?php

class InfoServer extends Database
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

    public function getServer()
    {
        $query = $this->server->prepare("SELECT * FROM servers");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getServerById($id)
    {
        $query = $this->server->prepare("SELECT * FROM servers WHERE id = :id");
        $query->bindParam(":id", $id);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getServerName()
    {
        return $this->server_name;
    }

    public function getServerIp()
    {
        return $this->server_ip;
    }

    public function getServerPort()
    {
        return $this->server_port;
    }

    public function getServerRcon()
    {
        return $this->server_rcon;
    }

    public function getServerStatus()
    {
        return $this->server_status;
    }

    public function getServerMaxplayers()
    {
        return $this->server_maxplayers;
    }

    public function getServerPlayers()
    {
        return $this->server_players;
    }

    public function getServerMap()
    {
        return $this->server_map;
    }

    public function getServerGame()
    {
        return $this->server_game;
    }

    public function getServerVersion()
    {
        return $this->server_version;
    }
}
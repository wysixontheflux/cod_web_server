<?php

class ModifyServer extends Database
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
    }
}
<?php

namespace App\Services;

use PEAR2\Net\RouterOS\Client;
use PEAR2\Net\RouterOS\Request;
use PEAR2\Net\RouterOS\Exception;

class MikrotikService
{
    private $client;

    public function __construct()
    {
        $this->client = new Client(
            env('MIKROTIK_HOST'),
            env('MIKROTIK_USER'),
            env('MIKROTIK_PASS'),
            env('MIKROTIK_PORT')
        );
    }

    public function addUser($username, $password, $profile = 'default')
    {
        try {
            $request = new Request('/ip/hotspot/user/add');
            $request->setArgument('name', $username);
            $request->setArgument('password', $password);
            $request->setArgument('profile', $profile);
            $this->client->sendSync($request);

            return "User $username berhasil ditambahkan!";
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }
}

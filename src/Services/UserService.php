<?php

namespace RayBlair\SpaceTradersPHP\Services;

class UserService extends BaseService
{
    /**
     * Create User Token
     *
     * @param string $username
     * @return void
     */
    public function token(string $username)
    {
        return $this->json($this->client->request('POST', "users/{$username}/token"));
    }

    /**
     * Show User Information
     *
     * @param string $username
     * @return void
     */
    public function get(string $username)
    {
        return $this->json($this->client->request('GET', "users/{$username}"));
    }
}

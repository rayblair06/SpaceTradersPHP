<?php

namespace RayBlair\SpaceTradersPHP\Services;

class LoanService extends BaseService
{
    /**
     * Get All Loans
     *
     * @return void
     */
    public function all()
    {
        return $this->json($this->client->request('GET', 'game/loans'));
    }

    /**
     * Show Loans
     *
     * @param string $username
     * @return void
     */
    public function get(string $username)
    {
        return $this->json($this->client->request('GET', "users/{$username}/loans"));
    }

    /**
     * Take Out Loan
     *
     * @param string $type
     * @param string $username
     * @return void
     */
    public function takeout(string $username, string $type)
    {
        return $this->json($this->client->request('POST', "users/{$username}/loans", [
            'json' => [
                'type' => $type,
            ],
        ]));
    }

    /**
     * Pay off Loan
     *
     * @param string $username
     * @param string $loan_id
     * @return void
     */
    public function payoff(string $username, string $loan_id)
    {
        return $this->json($this->client->request('PUT', "users/{$username}/loans/{$loan_id}"));
    }
}

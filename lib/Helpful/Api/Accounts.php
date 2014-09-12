<?php

namespace Helpful\Api;

use Helpful\HttpClient\HttpClient;

/**
 * These are like organizations which use Helpful.
 */
class Accounts
{

    private $client;

    public function __construct(HttpClient $client)
    {
        $this->client = $client;
    }

    /**
     * All the accounts the user has access to
     *
     * '/accounts' GET
     */
    public function all(array $options = array())
    {
        $body = (isset($options['query']) ? $options['query'] : array());

        $response = $this->client->get('/accounts', $body, $options);

        return $response;
    }

    /**
     * Get an account the user has access to
     *
     * '/accounts/:account_id' GET
     *
     * @param $account_id Identifier of the account
     */
    public function get($account_id, array $options = array())
    {
        $body = (isset($options['query']) ? $options['query'] : array());

        $response = $this->client->get('/accounts/'.rawurlencode($account_id).'', $body, $options);

        return $response;
    }

    /**
     * Update an account the user has access to
     *
     * '/accounts/:account_id' PATCH
     *
     * @param $account_id Identifier of the account
     */
    public function update($account_id, array $options = array())
    {
        $body = (isset($options['body']) ? $options['body'] : array());

        $response = $this->client->patch('/accounts/'.rawurlencode($account_id).'', $body, $options);

        return $response;
    }

}

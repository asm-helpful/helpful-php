<?php

namespace Helpful\Api;

use Helpful\HttpClient\HttpClient;

/**
 * People who operate or interacted with the account
 */
class People
{

    private $client;

    public function __construct(HttpClient $client)
    {
        $this->client = $client;
    }

    /**
     * List all people in the account the user has access to
     *
     * '/accounts/:account_id/people' GET
     *
     * @param $account_id Identifier of the account
     */
    public function all($account_id, array $options = array())
    {
        $body = (isset($options['query']) ? $options['query'] : array());

        $response = $this->client->get('/accounts/'.rawurlencode($account_id).'/people', $body, $options);

        return $response;
    }

}

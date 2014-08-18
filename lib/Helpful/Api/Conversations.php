<?php

namespace Helpful\Api;

use Helpful\HttpClient\HttpClient;

/**
 * Conversations in an account
 */
class Conversations
{

    private $client;

    public function __construct(HttpClient $client)
    {
        $this->client = $client;
    }

    /**
     * List all conversations in an account the user has access to
     *
     * '/accounts/:account_id/conversations' GET
     *
     * @param $account_id Identifier of the account
     */
    public function list($account_id, array $options = array())
    {
        $body = (isset($options['query']) ? $options['query'] : array());

        $response = $this->client->get('/accounts/'.rawurlencode($account_id).'/conversations', $body, $options);

        return $response;
    }

    /**
     * Create an empty conversation in account the user has access to
     *
     * '/accounts/:account_id/conversations' POST
     *
     * @param $account_id Identifier of the account
     */
    public function create($account_id, array $options = array())
    {
        $body = (isset($options['body']) ? $options['body'] : array());

        $response = $this->client->post('/accounts/'.rawurlencode($account_id).'/conversations', $body, $options);

        return $response;
    }

    /**
     * Get a conversation the user has access to
     *
     * '/conversations/:conversation_id' GET
     *
     * @param $conversation_id Identifier of the conversation
     */
    public function get($conversation_id, array $options = array())
    {
        $body = (isset($options['query']) ? $options['query'] : array());

        $response = $this->client->get('/conversations/'.rawurlencode($conversation_id).'', $body, $options);

        return $response;
    }

}

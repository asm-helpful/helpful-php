<?php

namespace Helpful\Api;

use Helpful\HttpClient\HttpClient;

/**
 * Messages in a conversation
 */
class Messages
{

    private $client;

    public function __construct(HttpClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get a message the user has access to
     *
     * '/messages/:message_id' GET
     *
     * @param $message_id Identifier of the message
     */
    public function get($message_id, array $options = array())
    {
        $body = (isset($options['query']) ? $options['query'] : array());

        $response = $this->client->get('/messages/'.rawurlencode($message_id).'', $body, $options);

        return $response;
    }

}

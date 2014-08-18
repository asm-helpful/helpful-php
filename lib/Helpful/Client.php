<?php

namespace Helpful;

use Helpful\HttpClient\HttpClient;

class Client
{
    private $httpClient;

    public function __construct($auth = array(), array $options = array())
    {
        $this->httpClient = new HttpClient($auth, $options);
    }

    /**
     * These are like organizations which use Helpful.
     */
    public function accounts()
    {
        return new Api\Accounts($this->httpClient);
    }

    /**
     * People who operate or interacted with the account
     */
    public function people()
    {
        return new Api\People($this->httpClient);
    }

    /**
     * Conversations in an account
     */
    public function conversations()
    {
        return new Api\Conversations($this->httpClient);
    }

    /**
     * Messages in a conversation
     */
    public function messages()
    {
        return new Api\Messages($this->httpClient);
    }

}

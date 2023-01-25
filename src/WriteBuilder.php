<?php

namespace Autotask\RequestBuilder;

use Autotask\Client\Client;
use Psr\Http\Message\ResponseInterface;

final class WriteBuilder
{
    public function __construct(
        private readonly Client $client,
        private readonly string $endpoint
    ) {}

    public function create(array $attributes): ResponseInterface
    {
        return $this->client->post($this->endpoint, json_encode($attributes));
    }
}
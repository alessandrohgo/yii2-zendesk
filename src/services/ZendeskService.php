<?php

namespace Alessandrohgo\Yii2Zendesk\services;

use Alessandrohgo\Yii2Zendesk\clients\ZendeskApiClient;

class ZendeskService
{
    public function __construct(private ZendeskApiClient $client) {}

    public function healthcheck(): array
    {
        return $this->client->ping();
    }
}

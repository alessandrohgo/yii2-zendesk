<?php

namespace Alessandrohgo\Yii2Zendesk\clients;

class ZendeskApiClient
{
    public function __construct(
        private string $baseUrl,
        private string $apiEmail,
        private string $apiToken,
        private int $timeout = 10
    ) {}

    public function ping(): array
    {
        return [
            'ok' => true,
            'baseUrl' => $this->baseUrl,
            'apiEmail' => $this->apiEmail,
            'timeout' => $this->timeout,
        ];
    }
}

<?php

namespace Alessandrohgo\Yii2Zendesk\Module;

use yii\base\Module as BaseModule;
use Yii;
use Alessandrohgo\Yii2Zendesk\clients\ZendeskApiClient;
use Alessandrohgo\Yii2Zendesk\services\ZendeskService;

class ZendeskModule extends BaseModule
{
    public string $baseUrl = '';
    public string $apiEmail = '';
    public string $apiToken = '';
    public int $timeout = 10;

    public function init(): void
    {
        parent::init();

        Yii::$container->set(ZendeskApiClient::class, function () {
            return new ZendeskApiClient(
                baseUrl: $this->baseUrl,
                apiEmail: $this->apiEmail,
                apiToken: $this->apiToken,
                timeout: $this->timeout
            );
        });

        Yii::$container->set(ZendeskService::class, ZendeskService::class);
    }
}

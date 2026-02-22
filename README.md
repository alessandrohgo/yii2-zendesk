# alesssandrog/yii2-zendesk

Yii2 module to integrate Zendesk (tickets, healthcheck, basic API wrapper).

## Requirements
- PHP >= 8.0
- Yii2 >= 2.0
- Zendesk API Token enabled:
  Admin Center → Apps and integrations → APIs → Zendesk API

This package uses `yiisoft/yii2-httpclient`.

---

## Installation

### 1) Asset Packagist (required by Yii2 assets)
Add this repository in your application's `composer.json` (only if you don't have it already):

```json
{
  "repositories": [
    { "type": "composer", "url": "https://asset-packagist.org" }
  ]
}
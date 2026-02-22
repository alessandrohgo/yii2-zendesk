# alessandrohgo/yii2-zendesk

Yii2 module to integrate Zendesk (tickets, basic API wrapper).

## Requirements
- PHP >= 8.0
- Yii2 >= 2.0
- Zendesk API Token enabled:
  Admin Center → Apps and integrations → APIs → Zendesk API

This package uses `yiisoft/yii2-httpclient`.

---

## Installation

### Option A (recommended): Install via GitHub tag (no Packagist required)

1) Add the repository to your application's `composer.json`:

```json
{
  "repositories": [
    { "type": "vcs", "url": "https://github.com/alessandrohgo/yii2-zendesk.git" }
  ]
}
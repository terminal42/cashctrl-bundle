# terminal42/cashctrl-bundle

A Symfony bundle for [our cashctrl.com API client](https://github.com/terminal42/cashctrl-api).
This bundle is currently used for our own projects subject to heavy changes.


## Installation

```bash
$ composer.phar require terminal42/cashctrl-bundle ^2.0@dev
```


## Configuration

The following config options are available (e.g. add to `config/config.yml`).

```yaml
terminal42_cashctrl:
    subdomain:      ""   # Mandatory; Your Cashctrl subdomain
    api_key:        ""   # Mandatory; Your API key
```

Instead of configuring the bundle, you can also set env keys, e.g. in your `.env.local` file.

```dotenv
CASHCTRL_SUBDOMAIN=   # Your Cashctrl subdomain
CASHCTRL_APIKEY=      # Your API key
```

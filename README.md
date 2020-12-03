# terminal42/cashctrl-bundle

A Symfony bundle for [our cashctrl.com API client](https://github.com/terminal42/cashctrl-api).
This bundle is currently used for our own projects and is not stable at all.
It thus might be subject to heavy changes.
If you're interested in moving to a stable release (version 1.0.0) so you can be
sure there are no BC breaks until version 2.0.0 (semver), please feel free to
get in touch with us.


## Installation

```bash
$ composer.phar require terminal42/cashctrl-bundle ^1.0
```


## Configuration

The following config options are available (e.g. add to `config/config.yml`).

```yaml
terminal42_cashctrl:
    subdomain:      ""   # Mandatory; Your Cashctrl subdomain
    api_key:        ""   # Mandatory; Your API key
```


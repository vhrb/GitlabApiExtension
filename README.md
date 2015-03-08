# Gitlab api extension

[![Downloads this Month](https://img.shields.io/packagist/dm/vhrb/gitlab-api-extension.svg)](https://packagist.org/packages/kdyby/console)
[![Latest stable](https://img.shields.io/packagist/v/vhrb/gitlab-api-extension.svg)](https://packagist.org/packages/kdyby/console)


Requirements
------------

Vhrb/gitalb-api-extension requires PHP 5.3 or higher.

- [Nette Framework](https://github.com/nette/nette)
- [Gitlbab](https://about.gitlab.com/)


Installation
------------

The best way to install vhrb/gitlab-api-extension is using  [Composer](http://getcomposer.org/):

```sh
$ composer require vhrb/gitlab-api-extension
```


Minimal configuration
------------

```yml
gitlab.api:
	url: _gitlab_url # example https://gitlab.com/
	ci-url: _gitlab_url # with http:// OR https://
	token: _private_token_
```
Ci-url isn't required.

Use
------------
```php
	injectClient(\Gitlab\Client $client);
	injectCiClient(\GitlabCi\Client $ciClient);
```
-----


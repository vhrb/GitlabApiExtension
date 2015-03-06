<?php

namespace Vhrb\GitlabApi\Di;

use GitlabCi\Client;
use Nette\DI\CompilerExtension;
use Nette\Utils\Strings;

class GitlabApiExtension extends CompilerExtension
{
	/**
	 * @var array
	 */
	public $defaults = [
		'token' => NULL,
		'url' => NULL,
		'ci-url' => NULL,
	];

	public function loadConfiguration()
	{
		$builder = $this->getContainerBuilder();
		$config = $this->getConfig($this->defaults);

		if (empty($config['url'])) {
			return;
		}

		$builder->addDefinition($this->prefix('client'))
			->setClass('\Gitlab\Client', [$config['url']])
			->setAutowired(FALSE)
			->addSetup('authenticate', [$config['token']]);

		$builder->addDefinition($this->prefix('ci.client'))
			->setClass('\GitlabCi\Client', [$config['ci-url']])
			->setAutowired(FALSE)
			->addSetup('authenticate', [$config['token'], Strings::replace($config['url'], '~(.*/)api/.*~', '\\1'), Client::AUTH_URL_TOKEN]);
	}

}
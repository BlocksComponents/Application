<?php

	namespace Real\Application;
	use Real\Di\AbstractContainerAware;
	use Real\Di\Container;

	class App extends AbstractContainerAware
	{
		private $request;
		private $eventDispatcher;
		private $router;
		private $config;

		public function __construct($container = null)
		{
			if($container !== null) {
				$this->setRequest($container->get('Request'))
				->setEventDispatcher($container->get('EventDispatcher'))
				->setRouter($container->get('Router'))
				->setConfig($container->get('AppConfig'));

				$this->container = $container;
			}
		}

		public function run($callable)
		{
		}

		public function config($key)
		{
			return $this->config->get($key);
		}

		public function setConfig($config)
		{
			$this->config = $config;
			return $this;
		}

		public function setRequest($request)
		{
			if ($request = null) {
				return false;
			}

			$this->request = $request;
			return  $this;
		}

		public function setEventDispatcher($dispatcher)
		{
			if ($request = null) {
				return false;
			}

			$this->eventDispatcher = $dispatcher;
			return  $this;
		}

		public function setRouter($router)
		{
			if ($request = null) {
				return false;
			}

			$this->router = $router;
			return  $this;
		}
	}
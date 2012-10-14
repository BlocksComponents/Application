<?php

	namespace Real\Application;

	class Config
	{
		private $config;
		private $dependencies;
		private $database;
		private $routes;

		public function __construct($config = null)
		{
			$this->config = $config;
		}

		public function get($key)
		{
			return $this->config[$key];
		}
	}
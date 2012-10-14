<?php

	namespace Real\Routing;

	class Route
	{
		private $path;
		private $controller;
		private $action;
		private $params;

		public function __construct($path = null, $controller = null, $action = null, $params = null)
		{
			$this->setPath($path);
			$this->setController($controller);
			$this->setAction($action);
			$this->setParams($params);
		}

		public function getPath()
		{
			return $this->path;
		}

		public function getController()
		{
			return $this->controller;
		}

		public function getAction()
		{
			return $this->action;
		}

		public function getParams()
		{
			return $this->params;
		}

		public function setPath($path)
		{
			$this->path = $path;
		}

		public function setController($controller)
		{
			$this->controller = $controller;
		}

		public function setAction($action)
		{
			$this->action = $action;
		}

		public function setParams($params)
		{
			$this->params = $params;
		}

	}